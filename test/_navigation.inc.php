<?php

echo navItem('#', 'Top Level Link') .
		navItem('/index.php', 'Test Webpage') .
		navItem('#', 'Another Webpage') .
		navItem('#', 'And a Third') .

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

