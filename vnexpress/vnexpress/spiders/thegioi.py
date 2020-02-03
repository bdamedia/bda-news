from pymongo import MongoClient
from slugify import slugify
from datetime import datetime
import scrapy
import pdb
import re

client = MongoClient('127.0.0.1', 27017)
# db = client.news
db = client['newdb']
#db.authenticate('mongoadmin', 'mongoadmin')
col = db['posts']

class Thegioi(scrapy.Spider):
    name = "thegioi"
    start_urls = ["https://vnexpress.net/the-gioi"]
    # lay list link bai viet tu chuyen muc thoi su
    def parse(self, response):
        #source = "https://vnexpress.net"
	source = ''
        list_topic = response.xpath('//section[@class="sidebar_1"]/article')
        link0 = list_topic[1].xpath('//article[@class = "list_news"]/h4[@class="title_news"]/a/@href').extract()
	link1 = response.xpath('//section[@class="featured container clearfix"]/article/h1[@class="title_news"]/a/@href').extract()
        link2 = response.xpath('//section[@class="featured container clearfix"]/ul[@id="list_sub_featured"]/li/h4/a/@href').extract()
        links = link0 + link1 + link2
	links = [url.split('?')[0].split('#')[0] for url in links]
        for i in links:
            if (col.find({"link": source + i}).count() > 0):
                exist = True
                break
            yield scrapy.Request(source + i, callback=self.importMongo)


    #insert data to mongodb
    def importMongo(self, response):
        # list_sentences = response.xpath('//article[@id="article-body"]/div[@class="col-7 article-main-body row"]/p/text()').extract()
        title = response.xpath('normalize-space(//section[@class="sidebar_1"]/h1)').extract()
        desc = response.xpath('normalize-space(//section[@class="sidebar_1"]/p[@class="description"])').extract()
	locate = response.xpath('normalize-space(//section[@class="sidebar_1"]/p[@class="description"]/span[@class="location-stamp"])').extract()
        thumb = response.xpath('//article[@class="content_detail fck_detail width_common block_ads_connect"]/table/tbody/tr[1]/td/img/@src').extract()
        thumb_title = response.xpath('//article[@class="content_detail fck_detail width_common block_ads_connect"]/table[1]/tbody/tr[1]/td/img/@alt').extract()
        list = response.xpath('//article[@class="content_detail fck_detail width_common block_ads_connect"]/p/text()').extract()
	tags = response.xpath("//meta[@name='keywords']/@content")[0].extract()
        thumb_url = response.xpath("//meta[@property='og:image']/@content")[0].extract()
	#format lai data truoc khi insert db
        list =  [item.strip() for item in list]
        tags = tags.split(',')
        locate = ''.join(locate)
        title = ''.join(title)
        slug = slugify(title)
        desc  = ''.join(desc)
        link = response.url
        category = '5d80e961626f8bd8657773b4'
        col.insert_one({"title": title, "desc": desc,"images": thumb,"thumb_url":thumb_url, "link": link, "content": list, "location": locate, "category": category, "tags": tags,"slug": slug,"date":datetime.now()})


