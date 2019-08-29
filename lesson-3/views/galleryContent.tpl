<li class="selected">
    <div class="cd-full-width">
        <div class="container-fluid js-tm-page-content" data-page-no="1" data-page-type="gallery">
            <div class="tm-img-gallery-container">
                <div class="tm-img-gallery gallery-three">
                    <!-- Gallery Two pop up connected with JS code below -->
                    {% for item in gallery %}
                        <div class="grid-item">
                            <a href="/gallery?id={{item.id}}">
                                <figure class="effect-sadie">
                                        <img src="/public/{{item.url_max_images}}" alt="Image" class="img-fluid tm-img">
                                    <figcaption>
                                        <h2 class="tm-figure-title">{{item.name}}</h2>
                                        <p class="tm-figure-description">Set true or false in HTML script tag for this page black and white.</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    {% endfor %}
                </div>
            </div> <!-- .tm-img-gallery-container -->
        </div>
    </div>
</li>