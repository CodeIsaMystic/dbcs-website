/\*\*
UPLOAD IMAGE:

- getImage()
- directory path
- shouldUpload()
- getPreviousImage()
- setImage()

=> if( empty($post->getImage() || $post->shouldUpload() === false ))
$post->getImage()

=> if( file_exists($directory) === false )
mkdir...

=> if ( !empty($post->getPreviousImage()) )
        formats...
        foreach format...
          $previousFile -> directory -> format -> extension
          if( file_exists($previousFile) )
unlink()

=> setImage()
$fileName & $manager

- instanciate
- make image
- fit
- save
- resize & keep ratio
  $post->setImage()

DETACH IMAGE:
=> getImage()
if (!empty($post->getImage()) )
  $formats
  foreach format...
    $file -> directory -> getImage() -> format -> extension
    if( file_exists($file) )
unlink()
\*/
