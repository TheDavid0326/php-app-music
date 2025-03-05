<?php

const genres = ["rock", "pop", "hiphop", "jazz", "classical", "electronic", "metal", "country", "funk", "rap", "dance", "soul", "blues", "indie", "metal", "k-pop", "latin", "folk", "punk", "gospel"];
$genre = genres[rand(0, count(genres)-1)];
$API_URL = "https://itunes.apple.com/search?term=$genre&media=music&entity=album&limit=10";

?>