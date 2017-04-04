<?php 

/**
 * Echos coffee incredient.
 *
 * @param Type of coffee
 */

function thingsThisColor($type) {
  if ($type == 'red') {
    echo '<p>Things that are red: Strawberries, Firetrucks, apples, roses, cherries, hearts, blood, fire.</p>';
  } else if ($type == 'blue') {
    echo '<p>Things that are blue: the sky, the ocean, blueberries, water, jeans, blue-jays.</p>';
  } else if ($type == 'green') {
    echo '<p>Things that are green: leaves, grass, leprachauns, dollar bills, garden, grasshoppers, snakes, crickets.</p>';
  } else {
    echo '<p>That&rsquo;s not a visible color!!!!</p>';
  }
}