<?php
$fields = get_fields();

?>
<?php if (is_admin()) : ?>
    <h1> Slider block</h1>
<?php endif; ?>
<?php if (is_admin() == false) : ?>
    <div class="glide slider container" style="background-color:<?=$fields['background_color']?>">
        <h2 class="slider__heading" style="color:<?=$fields['heading_color']?>">
            <?=$fields['heading']?>
        </h2>
        <p class="slider__subtitle" style="color:<?=$fields['heading_color']?>">
            <?=$fields['subtitle']?>
        </p>
        <?php if($fields['is_slider_title']) : ?>
            <h3 class="slider__title" style="color:<?=$fields['heading_color']?>">
                <?=$fields['slider_title']?>
            </h3> 
        <?php endif; ?>
           
        <div class="glide__track" data-glide-el="track">                
            <ul class="glide__slides">
                <?php foreach ($fields['slider'] as $slide) :?>        
                    <li class="glide__slide">
                        <h4><?=$slide['heading']?></h4>
                        <p><?=$slide['text']?></p>
                        <?php if ($slide['is_icons']) :?>
                            <img src="<?=$slide['icon']?>" alt="icon">
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="&lt;"></button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;"></button>
        </div>
    </div>
<?php endif; ?>