<?php

return array(

    'does_not_exist' => 'Standort existiert nicht.',
    'assoc_users'    => 'Der Standort kann gerade nicht gelöscht werden, weil mindestens ein Asset oder ein Benutzer damit verbunden ist, da ihm Assets zugeordnet sind, oder er der Hauptstandort für einen anderen Standort ist. Aktualisiere deine Modelle, sodass sie nicht mehr auf diesen Standort verweisen, und probier’s dann nochmal. ',
    'assoc_assets'	 => 'Dieser Standort ist mindestens einem Gegenstand zugewiesen und kann nicht gelöscht werden. Bitte entferne die Standortzuweisung bei den jeweiligen Gegenständen und versuche erneut, diesen Standort zu entfernen. ',
    'assoc_child_loc'	 => 'Dieser Standort ist mindestens einem anderen Ort übergeordnet und kann nicht gelöscht werden. Bitte aktualisiere Deine Standorte, so dass dieser Standort nicht mehr verknüpft ist, und versuche es erneut. ',
    'assigned_assets' => 'Zugeordnete Assets',
    'current_location' => 'Aktueller Standort',


    'create' => array(
        'error'   => 'Standort wurde nicht erstellt, bitte versuche es erneut.',
        'success' => 'Standort erfolgreich erstellt.'
    ),

    'update' => array(
        'error'   => 'Standort wurde nicht aktualisiert, bitte versuche es erneut',
        'success' => 'Standort erfolgreich aktualisiert.'
    ),

    'delete' => array(
        'confirm'   	=> 'Bist Du sicher, dass Du diesen Standort löschen willst?',
        'error'   => 'Es gab einen Fehler beim Löschen des Standorts. Bitte erneut versuchen.',
        'success' => 'Der Standort wurde erfolgreich gelöscht.'
    )

);
