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
    $namespaceDir = Dir::factoryTS(__DIR__)->sub('Webforge/TestData/PHPCodeStandard/'.$namespace.'/');
    $resources = $namespaceDir->sub('resources/');    
    $tplCode = $resources->getFile('CodeIndentationCase.template.php')->getContents();
    
    $convertName = function (File $caseFile) {
      return ucfirst(
        Preg::replace_callback($caseFile->getName(), '/[a-z]\-/', function ($match) {
          return mb_strtoupper($match[1]);
        })
      );
    };
    
    $output->writeln('writing test cases in '.$resources);
    
    foreach ($resources->sub('Cases')->getFiles('php') as $caseFile) {
      $phpCode = mb_substr($caseInput->getContents(), mb_strlen('<?php'));
      
      $testCase = $namespaceDir->getFile($testCaseName = $convertName($caseFile));
      $testCase->writeContents(
        str_replace(
          array(
            '%className%'=>$testCaseName,
            '%stringCode%'=>$phpCode,
            '%phpCode%'=>$phpCode
          ),
          $tplCode
        )
      );
      
      $output->writeln('  wrote '.$testCase);
    }
    
    $output->writeln('<info>finished.</info>');
    
    return 0;
  },
  'the command writes all cases for a code standard (coding style) out from its resources directory into'
);
?>