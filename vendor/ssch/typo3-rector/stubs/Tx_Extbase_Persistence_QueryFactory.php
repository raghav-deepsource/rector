<?php

namespace RectorPrefix20211029;

if (\class_exists('Tx_Extbase_Persistence_QueryFactory')) {
    return;
}
class Tx_Extbase_Persistence_QueryFactory
{
}
\class_alias('Tx_Extbase_Persistence_QueryFactory', 'Tx_Extbase_Persistence_QueryFactory', \false);
