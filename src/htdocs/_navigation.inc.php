<?php

echo navItem('/', 'Test') .
		navGroup('Group 1',
				navItem('#', 'Group item 1') .
				navItem('#', 'Group item 2')) .
		navGroup('Group 2',
				navItem('#', 'Group item 1') .
				navItem('#', 'Group item 2') .
				navItem('#', 'Group item 3')) .
		navGroup('Group 3',
				navItem('#', 'Group item 1') .
				navItem('#', 'Group item 2'));

