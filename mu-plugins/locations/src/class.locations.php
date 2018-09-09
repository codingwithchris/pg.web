<?php
namespace Playground\Locations;
use Samrap\Acf\Acf;

class Location {

    private $id;
    private $title;
    private $gmap_link;

    public function __construct( $id ){

        $this->id = $id;
        $this->set_title();
        $this->set_gmap_link();

    }

    /**
     * Setters
     */

    public function set_title(){

        $this->title = get_the_title( $this->get_id() );

    }

    public function set_gmap_link(){

        $this->gmap_link = Acf::field( 'location_gmap_link', $this->get_id() )->get();

    }


    /**
     * Getters
     */

    public function get_id(){
        return $this->id;
    }


    public function get_title(){

        return esc_html( $this->title );

    }

    public function get_gmap_link(){

        return esc_url( $this->gmap_link );

    }

}