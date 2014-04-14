<?php

echo navItem('/', 'Test Webpage') .
		navGroup('Craziness',
				navItem('#', 'Predicting Earthquakes') .
				navItem('#', 'Responding to Public')) .
		navGroup('Ski Resorts',
				navItem('#', 'Breckenridge') .
				navItem('#', 'Keystone') .
				navItem('#', 'Winter Park')) .
		navGroup('Towns in Colorado',
				navItem('#', 'Evergreen') .
				navItem('#', 'Golden'));

