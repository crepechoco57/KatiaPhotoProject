<?php
//Nvelle Repository de GalleryEvent
$articleRepo=new ArticleRepo();
//nouvelle Gallery pour setter un Name de gallery
$gallery=new Gallery();
$gallerySetName=$gallery->setName("galleryNB");
$galleryGetName=$gallery->getName();

//Fonction pour recup tout dans article et le galleryName à partir d'une string nom de gallery
$articles=$articleRepo->listArticlesByGallery($galleryGetName);


require 'view/gallery-nb/gallery-nb.phtml';

?>
