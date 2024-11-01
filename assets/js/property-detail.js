let popupSwiper;

function openPopupSlider(selectedIndex) {
    const popupSwiperContainer = document.querySelector('.popupSwiper');
    popupSwiperContainer.innerHTML = '';

    adjustedImageUrls.forEach((url, index) => {
        const slide = document.createElement('swiper-slide');
        const img = document.createElement('img');
        img.src = url;
        slide.appendChild(img);
        popupSwiperContainer.appendChild(slide);
    });

    if (!popupSwiper) {
        popupSwiper = new Swiper('.popupSwiper', {
            initialSlide: selectedIndex,
            pagination: { clickable: true },
            navigation: true,
            autoplay: false,
        });
    } else {
        popupSwiper.update();
        popupSwiper.slideTo(selectedIndex, 0);
    }

    document.getElementById('popup-slider-modal').style.display = 'flex';
}

function closePopupSlider() {
    document.getElementById('popup-slider-modal').style.display = 'none';
}

function closePopupIfClickedOutside(event) {
    const popupContent = document.querySelector('.popup-slider-content');
    if (!popupContent.contains(event.target)) {
        closePopupSlider();
    }
}

document.querySelectorAll('.sidebar-images-container img').forEach((img, index) => {
    img.addEventListener('click', () => openPopupSlider(index));
});
