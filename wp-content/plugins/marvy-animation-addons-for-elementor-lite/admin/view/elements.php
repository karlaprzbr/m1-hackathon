<?php
$marvyOptions = get_option('marvy_option_settings');
$marvyOptions = !empty($marvyOptions) ? $marvyOptions : [];
$checkElements = array_keys($marvyOptions);
$elements = [
    'content-elements'  => [
        'title' => __( 'Basic Animation', 'marvy-lang'),
        'elements'  => [
            [
                'key'   => 'drop_animation',
                'title' => __( 'Drop Animation', 'marvy-lang'),
                'is_pro' => false
            ],
            [
                'key'   => 'fancy_rotate',
                'title' => __( 'Fancy Rotate Animation', 'marvy-lang'),
                'is_pro' => false
            ],
            [
                'key'   => 'flying_object',
                'title' => __( 'Flying Object Animation', 'marvy-lang'),
                'is_pro' => false
            ],
            [
                'key'   => 'ripples_animation',
                'title' => __( 'Ripples Animation', 'marvy-lang'),
                'is_pro' => false
            ],
            [
                'key' =>  'waves_animation',
                'title' => __( 'Waves Animation', 'marvy-lang'),
                'is_pro' => false
            ],
            [
                'key' =>  'rings_animation',
                'title' => __( 'Rings Animation', 'marvy-lang'),
                'is_pro' => false
            ],
            [
                'key' =>  'topology_animation',
                'title' => __( 'Topology Animation', 'marvy-lang'),
                'is_pro' => false
            ],
            [
                'key' =>  'gradient_animation',
                'title' => __( 'Gradient Animation', 'marvy-lang'),
                'is_pro' => false
            ],
            [
                'key' =>  'snow_animation',
                'title' => __( 'Snow Animation', 'marvy-lang'),
                'is_pro' => false
            ],
            [
                'key' =>  'firework_animation',
                'title' => __( 'Firework Animation', 'marvy-lang'),
                'is_pro' => false
            ],
            [
                'key' =>  'birds_animation',
                'title' => __( 'Birds Animation', 'marvy-lang'),
                'is_pro' => true
            ],
            [
                'key' =>  'cells_animation',
                'title' => __( 'Cells Animation', 'marvy-lang'),
                'is_pro' => true
            ],
            [
                'key' =>  'dots_animation',
                'title' => __( 'Dots Animation', 'marvy-lang'),
                'is_pro' => true
            ],
            [
                'key' =>  'fog_animation',
                'title' => __( 'Fog Animation', 'marvy-lang'),
                'is_pro' => true
            ],
            [
                'key' =>  'globe_animation',
                'title' => __( 'Globe Animation', 'marvy-lang'),
                'is_pro' => true
            ],
            [
                'key' =>  'halo_animation',
                'title' => __( 'Halo Animation', 'marvy-lang'),
                'is_pro' => true
            ],
            [
                'key' =>  'net_animation',
                'title' => __( 'Net Animation', 'marvy-lang'),
                'is_pro' => true
            ],
            [
                'key' =>  'trunk_animation',
                'title' => __( 'Trunk Animation', 'marvy-lang'),
                'is_pro' => true
            ],
            [
                'key' =>  'fluid_animation',
                'title' => __( 'Fluid Animation', 'marvy-lang'),
                'is_pro' => true
            ],
            [
                'key' =>  'digitalStream_animation',
                'title' => __( 'Digital Stream Animation', 'marvy-lang'),
                'is_pro' => true
            ],
            [
                'key' =>  'floating_heart_animation',
                'title' => __( 'Floating Heart Animation', 'marvy-lang'),
                'is_pro' => true
            ],
            [
                'key' =>  'particles_wave_animation',
                'title' => __( 'Particles Wave Animation', 'marvy-lang'),
                'is_pro' => true
            ],
            [
                'key' =>  'dna_animation',
                'title' => __( 'DNA Animation', 'marvy-lang'),
                'is_pro' => true
            ],
            [
                'key' =>  'beyblade_animation',
                'title' => __( 'Beyblade Animation', 'marvy-lang'),
                'is_pro' => true
            ]
          ]
      ]
 ];
?>

<?php foreach ($elements as $element) { ?>
    <div class="row">
        <h1><?php esc_html_e($element['title']) ?></h1>
    </div>
    <div class="row">

        <?php  foreach($element['elements'] as $key => $item) { ?>
            <div class="col-3">
                <div class="marvy-checkbox">
                    <div class="info">
                        <p> <?php esc_html_e($item['title']) ?></p>
                    </div>
                    <?php if ($item['is_pro']) { ?>
                        <label class="pro-status">Pro</label>
                    <?php }
                    if ((boolean) get_transient('marvy_animation_pro') === true) {
                        $disabled = true;
                    } else {
                        if ($item['is_pro'] === true) {
                            $disabled = false;
                        } else {
                            $disabled = true;
                        }
                    }
                    ?>
                    <label class="switch">
                        <input type="checkbox" id="switch" name="<?php echo esc_attr($item['key']); ?>"  <?php echo checked( 1, $disabled === true && !is_array(marvy_get_setting($item['key'])) ? marvy_get_setting($item['key']) : false, false ) ?> <?php echo ($disabled === true ? '' : 'disabled') ?> >
                        <small></small>
                    </label>
                </div>
            </div>
        <?php } ?>

    </div>
<?php } ?>
<div class="text-right">
    <button type="button" class="btn marvy-setting-save"><?php esc_html_e('Save settings', 'marvy-lang'); ?></button>
</div>
