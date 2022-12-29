<?php

declare (strict_types=1);
namespace RectorPrefix202212;

use Rector\Config\RectorConfig;
use Rector\Php80\Rector\Class_\AnnotationToAttributeRector;
use Rector\Php80\ValueObject\AnnotationToAttribute;
return static function (RectorConfig $rectorConfig) : void {
    $rectorConfig->ruleWithConfiguration(AnnotationToAttributeRector::class, [new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\Blameable'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\IpTraceable'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\Language'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\Locale'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\Loggable'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\Reference'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\ReferenceIntegrity'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\ReferenceMany'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\ReferenceManyEmbed'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\ReferenceOne'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\Slug'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\SlugHandler'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\SlugHandlerOption'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\SoftDeleteable'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\SortableGroup'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\SortablePosition'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\Timestampable'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\Translatable'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\TranslationEntity'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\Tree'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\TreeClosure'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\TreeLeft'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\TreeLevel'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\TreeLockTime'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\TreeParent'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\TreePath'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\TreePathHash'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\TreePathSource'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\TreeRight'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\TreeRoot'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\Uploadable'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\UploadableFileMimeType'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\UploadableFileName'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\UploadableFilePath'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\UploadableFileSize'), new AnnotationToAttribute('Gedmo\\Mapping\\Annotation\\Versioned')]);
};
