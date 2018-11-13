<?php
/**
 * Created by PhpStorm.
 * User: mitch
 * Date: 2018-11-13
 * Time: 10:58
 */

function larawoo_set_name($data, $name)
{
	$data['name']  =  $name;
	return $data;
}

function larawoo_set_slug($data, $slug)
{
	$data['slug'] = $slug;
	return $data;
}

function larawoo_set_sku($data, $sku)
{
	$data['sku'] = $sku;
	return $data;
}

function larawoo_set_category($data, $category)
{
	$data['category'] ['id']= $category;
	return $data;
}

function larawoo_set_regular_price($data, $regular_price)
{
	$data['regular_price'] = $regular_price;
	return $data;
}

function larawoo_set_type($data, $type)
{
	$types = [
		'simple',
		'grouped',
		'external',
		'variable',
	];
	
	if( in_array( $type, $types, true ) )
	{
		$data['type']   =   $type;
	} else {
		$data['type']   =   'simple';
	}
	return $data;
}

function larawoo_set_status($data, $status)
{
	$states = [
		'draft',
		'pending',
		'private',
		'publish',
	];
	
	if( in_array( $status, $states, true ) )
	{
		$data['status']   =   $status;
	} else {
		$data['status']   =   'publish';
	}
	return $data;
}

//visible, catalog, search and hidden
function larawoo_set_catalog_visibility($data, $visibility)
{
	$states = [
		'visible',
		'catalog',
		'search',
		'hidden',
	];
	
	if( in_array( $visibility, $states, true ) )
	{
		$data['catalog_visibility']   =   $visibility;
	} else {
		$data['catalog_visibility']   =   'visible';
	}
	return $data;
}

function larawoo_set_featured($data, $featured = false)
{
	if( $featured )
		$data['fetured'] = true;
	return $data;
}

function larawoo_set_description($data, $description)
{
	$data['description']    =   $description;
	return $data;
}

function larawoo_set_short_description($data, $short_description)
{
	$data['short_description']    =   $short_description;
	return $data;
}
