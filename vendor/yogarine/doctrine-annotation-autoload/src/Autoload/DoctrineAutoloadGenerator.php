<?php

namespace Yogarine\Composer\Autoload;

use Composer\Autoload\AutoloadGenerator;

/**
 * Add the autoloader to Doctrine Annotation Registry.
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 * @author Alwin Garside <alwin@garsi.de>
 */
class DoctrineAutoloadGenerator extends AutoloadGenerator
{
    /**
     * @param  string $vendorPathToTargetDirCode
     * @param  string $suffix
     * @return string
     */
    protected function getAutoloadFile($vendorPathToTargetDirCode, $suffix)
    {
        $lastChar = $vendorPathToTargetDirCode[strlen($vendorPathToTargetDirCode) - 1];
        if ("'" === $lastChar || '"' === $lastChar) {
            $vendorPathToTargetDirCode = substr($vendorPathToTargetDirCode, 0, -1).'/autoload_real.php'.$lastChar;
        } else {
            $vendorPathToTargetDirCode .= " . '/autoload_real.php'";
        }

        return <<<AUTOLOAD
<?php

// autoload.php @generated by doctrine-annotation-autoload plugin for Composer:
// https://github.com/Yogarine/doctrine-annotation-autoload

use Doctrine\Common\Annotations\AnnotationRegistry;

require_once $vendorPathToTargetDirCode;

\$loader = ComposerAutoloaderInit$suffix::getLoader();

AnnotationRegistry::registerLoader([\$loader, 'loadClass']);

return \$loader;

AUTOLOAD;
    }
}