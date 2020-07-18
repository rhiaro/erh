<?php

namespace rhiaro\ERH;
use Requests;
use ML\JsonLD\JsonLD;

function make_jsonld_payload($graph){
    $ns = ns();
    $context = $ns->get("as");
    $options = array("compactArrays" => true);
    $jsonld = $graph->serialise("jsonld");
    $compacted = JsonLD::compact($jsonld, $context, $options);
    return JsonLD::toString($compacted, true);
}

function post_to_endpoint($endpoint, $key, $payload){
    $headers = array("Content-Type" => "application/ld+json", "Authorization" => $key);
    $response = Requests::post($endpoint, $headers, $payload);
    return $response;
}

?>