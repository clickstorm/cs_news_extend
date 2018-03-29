# Extend table structure for table 'tx_news_domain_model_tag'
CREATE TABLE tx_news_domain_model_tag (
	tx_csnewsextend_color varchar(255) DEFAULT '' NOT NULL
);

# Extend table structure for table 'tx_news_domain_model_news'
CREATE TABLE tx_news_domain_model_news (
	tx_csnewsextend_location varchar(255) DEFAULT '' NOT NULL
);