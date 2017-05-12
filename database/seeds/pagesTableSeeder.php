<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class pagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
        	[
            	'title' => 'About Us',
            	'rout' => 'about-us',
            	'anchor_text' => 'About Us',
            	'body' => 'This is About us page',
            	'description' => 'This is About us page',
            	'is_published' => 'yes',
            	
        	],
        	[
            	'title' => 'Contact Us',
            	'rout' => 'contact-us',
            	'anchor_text' => 'Contact Us',
            	'body' => 'This is Contact us page',
            	'description' => 'This is Contact us page',
            	'is_published' => 'yes',
            	
        	],
        	[
            	'title' => 'Portfolio',
            	'rout' => 'portfolio',
            	'anchor_text' => 'Portfolio',
            	'body' => 'This is Portfolio page',
            	'description' => 'This is Portfolio page',
            	'is_published' => 'yes',
            	
        	]
        ]);
    }
}
