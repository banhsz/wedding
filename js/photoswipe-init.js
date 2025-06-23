import PhotoSwipeLightbox from '/js/photoswipe-lightbox.esm.min.js';
const lightbox = new PhotoSwipeLightbox({
    gallery: '#gallery',
    children: 'a',
    preload: [1, 1],
    pswpModule: () => import('/js/photoswipe.esm.min.js')
});
lightbox.init();