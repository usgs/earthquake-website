<?php

echo navItem('#', 'Test Webpage') .
		navGroup('Craziness',
				navItem('#', 'Predicting Earthquakes') .
				navItem('/index.php', 'Responding to Public')) .
		navGroup('Ski Resorts',
				navItem('#', 'Breckenridge') .
				navItem('#', 'Keystone') .
				navItem('#', 'Winter Park')) .
		navGroup('Towns in Colorado',
				navItem('#', 'Evergreen') .
				navItem('#', 'Golden'));

