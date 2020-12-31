<?php

function activateLink($routeName) {
     return request()->routeIs($routeName) ? 'text-info' : '';
}
