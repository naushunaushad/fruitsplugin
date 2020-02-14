<?php

namespace Drupal\testfruits\Controller;

use Drupal\Core\Controller\ControllerBase;


class TestFruitsController extends ControllerBase {

    public function getfruitsPage() {       
        $type = \Drupal::service('fruits.fruits_manager');      
        
        
        $fruits = $items = [];
        
        //Apple Fruit data
        $apple = $type->createInstance('apple_fruits'); 
        
        $fruits['apple']['vitamins'] = implode(',',$apple->vitamins());        
        $fruits['apple']['minerals'] = implode(',',$apple->minerals());
        
        //Banana Fruits data        
        $banana = $type->createInstance('banana_fruits');
        
        $fruits['banana']['vitamins'] = implode(',',$banana->vitamins());
        $fruits['banana']['minerals'] = implode(',',$banana->minerals());
        
        //Orange Fruits data
        $orange = $type->createInstance('orange_fruits');
        
        $fruits['orange']['vitamins'] = implode(',',$orange->vitamins());
        $fruits['orange']['minerals'] = implode(',',$orange->minerals());
        
        //grapes Fruits data
        $grape = $type->createInstance('grape_fruits');
        
        $fruits['grape']['vitamins'] = implode(',',$grape->vitamins());
        $fruits['grape']['minerals'] = implode(',',$grape->minerals());
        
        foreach($fruits as $key=>$val){
            $vitamins = $this->t('Vitamins').':'.$val['vitamins'];
            $minerals = $this->t('Minerals').':'.$val['minerals'];
            $items[] = [
                '#theme' => 'item_list',
                '#list_type' => 'ul',
                '#title' => ucfirst($key),
                '#items' => [$vitamins,$minerals]
            ];            
        }          
       
        $content = [
        '#theme' => 'item_list',
        '#list_type' => 'ol',       
        '#items' => $items,
        '#attributes' => ['class' => 'fruitslist'],        
       ]; 
        return $content;
    }

}
