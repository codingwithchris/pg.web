<?php
namespace Playground\Seasons;
use Samrap\Acf\Acf;

class Season{

    private $id;
    private $term;

    public function __construct( $id ){

        $this->id = $id;
        $this->term = get_term( $id, 'season' );

    }

    public function get_name(){

        return is_tax()
            ? $this->term->name
            : 'The Shows';

    }

    public function get_slug(){

        return $this->term->slug;

    }

    public function get_id(){

        return $this->id;

    }

    public function get_term(){

        return $this->term;

    }

    public function get_tagline(){

        return is_tax()
                ? Acf::field('season_tagline', $this->get_term() )->default('season archive')->escape()->get()
                : '';

    }

    public function get_link(){

        return get_permalink( $this->get_id() );

    }

    public function get_shows( Show $show ){

    }

    public function get_remaining_shows(){

    }

    public function get_trailer(){

        return is_tax()
            ? Acf::field('season_trailer', $this->get_id() )->escape()->get() ?? false
            : false;

    }

    /**
     * Get various season-related images
     *
     * @return void
     */
    public function get_image( $type ){

        // Hero
        // Featured (Yoast sharing)

    }

}