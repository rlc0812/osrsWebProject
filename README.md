~OSRS Web Project ReadME~


Uses: Bootstrap/Ajax/jQuery in front end

Setup:
Create tables from 'Runescape Tables'
Packages:
-php-curl,
-git,
-mysql-server,
-apache2


CronJobs running on
-/homeScripts/updateCharacterStats.php (10 mins)
-/itemStatsData/getExchangeData.php (5 mins)

Manual data collection scripts to setup backend:
-'High alchemy calculatorPage:
	alchScripts/getAlchValues.php (must run after getExchangeData populates exchange table)
-'Useful untradeable equips' page:
	itemStatsData/getNeededItems.php 
-'pkBuilds' page:
	statTableCreate.php


Absolute Directory References:

-achievementScripts/AchievementQueries.php: Lines 3,21
-homeScripts/updateCharacterStats.php: Line 3
-alchScripts/getAlchValues.php: Line 2
-alchScripts/jsonFiles/getAlchJsonData.php: Line 2
-itemStatsData/getExchangeData.php: Line 5
-achievementScripts/requirements.php: Line 19
-alchScripts/CalculateAlchProfit.php: Line 4
-homeScripts/dataInsert.php: Line 6
