~OSRS Web Project ReadME~


Uses: Bootstrap/Ajax/jQuery in front end
Backend: php mysql

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

-'pkBuilds' page:
	statTableCreate.php