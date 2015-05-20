interfaces
named routes
middlewares
data types + filtering + sorting

/*------------------------------------------------
| route_name => /route 	:: view
------------------------------------------------*/
GET  estates			=> /										:: estates
GET  estate 			=> /estates/{estate}/{estate_id}			:: estate
GET  articles			=> /articles								:: articles
GET  article 			=> /articles/{article}/{article_id}			:: article
GET  how_to				=> /how_to									:: how_to
GET  rent_sale			=> /rent_sale								:: rent_sale
GET  selected			=> /selected								:: (selected or real_estate)?
GET  admin				=> /admin									:: login and admin if auth
POST add_town			=> /admin/add_town							:: (popup)
POST add_estate 		=> /admin/add_estate						:: (popup)
GET	 admin_real_estate	=> /admin/real_estate						:: real_estate++
GET  admin_articles		=> /admin/articles 							:: articles++
GET  create_article		=> /admin/cretate_article					:: article_change
GET  create_estate 		=> /admin/create_estate						:: estate_change
GET  update_article		=> /admin/update_article					:: article_change++
GET  update_estate 		=> /admin/update_estate						:: estate_change++
POST delete_article		=> /admin/delete_article/{article_id}		:: redirect->with 