<?php

use Webforge\Common\System\Dir;
use Webforge\Common\System\File;
use Webforge\Common\Preg;

/**
 *
 * $createCommand = function ($name, array|closure $configure, closure $execute, $help = NULL)
 *
 * // argument
 * $arg = function ($name, $description = NULL, $required = TRUE, $multiple = FALSE) // default: required
 *
 * // option
 * $opt = function($name, $short = NULL, $withValue = TRUE, $description = NULL) // default: mit value required
 * $flag = function($name, $short = NULL, $description) // ohne value
 */

$createCommand('compile:code-standards',
  array(
    $arg('code-standard-name', 'the namespace of the code-standards to compile: currently only PSR', $required = TRUE)
  ),
  function ($input, $output, $command) {
    $namespace = $input->getArgument('code-standard-name');
    $namespaceDir = Dir::factoryTS(__DIR__)->sub($fullNamespace = 'Webforge/TestData/PHPCodeStandard/'.$namespace.'/');
    $fullNamespace = str_replace('/', '\\', $fullNamespace);
    $resources = $namespaceDir->sub('resources/');    
    $tplCode = $resources->getFile('CodeIndentationCase.template.php')->getContents();
    
    $convertName = function (File $caseFile) {
      return ucfirst(
        Preg::replace_callback($caseFile->getName(File::WITHOUT_EXTENSION), '/\-([a-z])/', function ($match) {
          return mb_strtoupper($match[1]);
        })
      ).'Case.php';
    };
    
    $output->writeln('writing test cases in '.$resources);
    
    $list = array();
    foreach ($resources->sub('Cases')->getFiles('php') as $caseFile) {
      $phpCode = mb_substr($caseFile->getContents(), mb_strlen("<?php\n"));
      
      $testCase = $namespaceDir->getFile($convertName($caseFile));
      $testCase->writeContents(
        \Psc\TPL\TPL::miniTemplate(
          $tplCode,
          array(
            'className'=>$className = $testCase->getName(File::WITHOUT_EXTENSION),
            'stringCode'=>$phpCode,
            'phpCode'=>$phpCode
          )
        )
      );
      
      $list[] = $fullNamespace.$className;
      
      $output->writeln('  wrote '.$testCase);
    }
    
    $indexFile = $resources->getFile('list.php');
    $output->writeln('writing index-list: '.$indexFile);
    $indexFile->writeContents('<?php'."\n".'$list = '.var_export($list, true).'; '."\n".'?>');
    
    $output->writeln('<info>finished.</info>');
    
    return 0;
  },
  'the command writes all cases for a code standard (coding style) out from its resources directory into'
);
?>