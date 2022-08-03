<?php

if (verifierAdmin()) {
    echo "Admin";
} else {
    echo "Prohibited";
}
