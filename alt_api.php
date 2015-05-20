interfaces
named routes
middlewares
data types + filtering + sorting

/*------------------------------------------------
| route_name => /route 	:: view
------------------------------------------------*/
{{-- GET  real_estate		=> /										:: real_estate --}}
{{-- GET  estate 			=> /real_estate/{estate}/{estate_id}		:: estate --}}
{{-- GET  articles			=> /articles								:: articles --}}
{{-- GET  article 			=> /articles/{article}/{article_id}			:: article --}}
{{-- GET  how_to				=> /how_to									:: how_to --}}
{{-- GET  rent_sale			=> /rent_sale								:: rent_sale --}}
{{-- GET  selected			=> /selected								:: real_estate --}}
{{-- GET  admin				=> /admin									:: login and admin if auth --}}
{{-- POST add_town			=> /admin/add_town							:: add_town --}}
{{-- POST add_district		=> /admin/add_district						:: add_district --}}
{{-- POST add_estate 		=> /admin/add_estate						:: add_estate --}}
{{-- GET	 admin_real_estate	=> /admin/real_estate						:: real_estate++ --}}
{{-- GET  admin_articles		=> /admin/articles 							:: articles++ --}}
{{-- GET  create_article		=> /admin/cretate_article					:: article_change --}}
{{-- GET  create_estate 		=> /admin/create_estate						:: estate_change ?? --}}
{{-- GET  update_article		=> /admin/update_article					:: article_change++ --}}
{{-- GET  update_estate 		=> /admin/update_estate						:: estate_change++ --}}
{{-- POST delete_article		=> /admin/delete_article/{article_id}		:: redirect->with --}}
{{-- POST delete_estate		=> /admin/delete_estate/{estate_id}			:: redirect->with --}}
{{-- POST delete_town		=> /admin/delete_town/{town_id}				:: redirect->with --}}
{{-- POST delete_district	=> /admin/delete_district/{district_id}		:: redirect->with --}}



SORT_BY_ACTION_GROUP

ESTATE
POST add_estate 		=> /admin/add_estate									:: add_estate
GET  update_estate 		=> /admin/update_estate									:: estate_change++
POST delete_estate		=> /admin/delete_estate/{estate_id}						:: redirect->with
GET	 admin_real_estate	=> /admin/real_estate									:: real_estate++
GET  real_estate		=> /													:: real_estate
GET  estate 			=> /real_estate/{estate}/{estate_id}					:: estate
GET  selected			=> /selected											:: real_estate
{{-- HOW WE ADD TO SELECTED AND DELETE FROM THEM --}}
???
{{-- HOW TO SORT ESTATE DEPENDING ON SELECTED FEATURES(PRICE, AREA ETC?) --}}
GET estate_by_town		=> /real_estate/{town_id}								:: real_estate
GET estate_by_town_district	=> /real_estate/{town_id}/{district_id}				:: real_estate
GET estate_by_house_area=> /real_estate&area_min=&area_max=						:: real_estate
GET estate_by_yard_area	=> /real_estate&area_min=&area_max=						:: real_estate
GET estate_by_type		=> /real_estate&type=									:: real_estate
GET estate_by_period	=> /real_estate&period_min=&period_max=					:: real_estate

ARTICLE
GET  create_article		=> /admin/cretate_article								:: article_change
GET  update_article		=> /admin/update_article								:: article_change++
POST delete_article		=> /admin/delete_article/{article_id}					:: redirect->with
GET  admin_articles		=> /admin/articles 										:: articles++
GET  articles			=> /articles											:: articles
GET  article 			=> /articles/{article}/{article_id}						:: article

TOWN
POST add_town			=> /admin/towns/add_town								:: town
POST update_town		=> /admin/towns/update_town/{town_id} 					:: pop_up
POST delete_town		=> /admin/towns/delete_town/{town_id}					:: redirect->with
GET admin_town			=> /admin/towns											:: town

DISRICT
POST add_district		=> /admin/districts/add_district						:: district
POST update_district	=> /admin/districts/update_district						:: pop_up
POST delete_district	=> /admin/districts/delete_district/{district_id}		:: redirect->with
GET admin_district		=> /admin/districts										:: district

TEXT
GET  how_to				=> /how_to												:: how_to
GET  rent_sale			=> /rent_sale											:: rent_sale
GET  about				=> /about												:: about
GET  contacts			=> /contacts											:: contacts


ADMIN
GET  admin				=> /admin												:: login and admin if auth










