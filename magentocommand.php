// commands lines
bin/magento dev:template-hints:enable
bin/magento queue:consumers:start exportProcessor
sudo php bin/magento setup:upgrade
sudo php bin/magento setup:static-content:deploy -f
sudo php bin/magento cache:flush
sudo chmod -R 777 var/ pub/static/ generated/ pub/media/
sudo php bin/magento indexer:reindex
php bin/magento setup:upgrade                         
php bin/magento s:d:c 
php bin/magento s:s:d -f
php bin/magento c:c                       
php bin/magento cache:flush
php bin/magento indexer:reset
php bin/magento indexer:reindex
chmod -R 777 
--clear-static-content
find app/* -name '*authentication-popup.html*'

Permission commands
find . -type f -exec chmod 644 {} \;
find . -type d -exec chmod 755 {} \;
find ./var -type d -exec chmod 777 {} \;
find ./pub/media -type d -exec chmod 777 {} \;
find ./pub/static -type d -exec chmod 777 {} \;
chmod 777 ./app/etc
chmod 644 ./app/etc/*.xml
sudo find . -type d -exec chmod 770 {} \; && sudo find . -type f -exec chmod 660 {} \; && sudo chmod u+x bin/magento

122451227
Delete
sudo rm -rf pub/static
sudo rm -rf var/cache
sudo rm -rf var/composer_home
sudo rm -rf var/generation
sudo rm -rf var/page_cache
rm -rf var/view_preprocessed/* rm -rf var/cache/* rm -rf var/page_cache/* rm -rf pub/static/*
rm -rf generated/code/*
sudo rm -rf pub/static/* sudo rm -rf var/cache/* sudo rm -rf var/page_cache/* sudo rm -rf var/view_preprocessed/* rm -rf generated/code/*
bin/magento admin:user:create --admin-firstname=kailash --admin-lastname=mishra --admin-email=j.doe@example.com --admin-user=km --admin-password=kailash@@123


Database setup

Copy sql file dump_file_name.sql inside project dir as it is mounted at /var/www/magento dir inside cli contianer
docker-compose exec cli bash
ls <- to list project dir's files & dirs
mysql -h mariadb -u root -p
show databases;
use project;
source dump_file_name.sql;
show tables;

stripe
bgpe-sbhk-jhct-wdkt-jpzd

For magento 
<?php echo $block->getLayout()->createBlock('Magento\Cms\Block\Block')->setBlockId('block_footer_custom')->toHtml();?>
<block class="Magento\Cms\Block\Block" name="block-footer" after="footer_links">
      <arguments>
            <argument name="block_id" xsi:type="string">block_footer_custom</argument>
      </arguments>
</block>
<?php
$blockObj= $block->getLayout()->createBlock('Company\Helloworld\Block\Main');
echo $blockObj->getMyCustomMethod();
?>

<?php
$htmlEle = "<html><body><p data-name='call'>This is ItSolutionStuff.com Example 1</p><p data-name='call2'>This is ItSolutionStuff.com Example 1</p></body></html>";
  
  $domdoc = new DOMDocument();
  $domdoc->loadHTML($htmlEle);
  $xpath = new DOMXpath($domdoc);
    
  $query = "//p[@data-name]";
  $entries = $xpath->query($query);
    
  foreach ($entries as $p) {
      echo $p->getAttribute('data-name'), PHP_EOL;
  }

?>
SELECT path,value FROM core_config_data WHERE path LIKE 'web/unsecure/base%';
SELECT path,value FROM core_config_data WHERE path LIKE 'web/secure/base%';
UPDATE core_config_data SET value = 'http://localhost:8085/' WHERE path LIKE 'web/unsecure/base_url';
UPDATE core_config_data SET value = 'http://localhost:8085/' WHERE path LIKE 'web/secure/base_url';
UPDATE `core_config_data` SET `value` = '0' WHERE `core_config_data`.`path` LIKE "%admin/url/use_custom_path%";

UPDATE core_config_data SET value = 'http://127.0.0.1:8080/' WHERE path LIKE 'web/unsecure/base_url';
UPDATE core_config_data SET value = 'http://127.0.0.1:8080/' WHERE path LIKE 'web/secure/base_url';

git clone https://github.com/readymadehost/magento2-dev-docker.git project-docker
cd project-docker

mkdir project or git clone <some_git_repo_url> project for existing project

cp .env.sample .env and review .env file
docker-compose build
docker-compose up -d
docker-compose exec cli bash
php -v && php -m


git clone https://sakwo.sastodeal.com/suson/sd-docker.git
cd sd-docker
git clone https://sakwo.sastodeal.com/suson/sd-magento.git project

cp .env.sample .env <- Verify .env for versions
docker-compose build
cp sastodeal/nginx.conf.sample project/nginx.conf.sample
docker-compose up -d

docker-compose ps <- List if containers are running properly
If elasticsearch keeps stopping read: https://sakwo.sastodeal.com/suson/sd-docker#elasticsearch-support


docker-compose exec cli bash <- Run bash of cli container


php -v && composer -V && n98-magerun2.phar -V <- Inside cli container


bin/magento setup:install \
--base-url=http://localhost:8085 \
--db-host=mariadb \
--db-name=project \
--db-user=root \
--db-password=root \
--backend-frontname=admin \
--admin-firstname=admin \
--admin-lastname=admin \
--admin-email=admin@admin.com \
--admin-user=admin \
--admin-password=admin@123 \
--language=en_US \
--currency=USD \
--timezone=America/Chicago \
--use-rewrites=1 \
--search-engine=elasticsearch7 \
--elasticsearch-host=elasticsearch \
--elasticsearch-port=9200