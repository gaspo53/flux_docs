<?php //echo link_to($document->getName(),public_path("uploads"). DIRECTORY_SEPARATOR . $document->getFilename()) ?><?php //echo link_to($document->getName(),public_path("uploads"). DIRECTORY_SEPARATOR . $document->getFilename()) ?>
<?php echo link_to($document->getName(),"document/download?id=".$document->getId()) ?>
