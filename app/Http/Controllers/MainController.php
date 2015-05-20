<?php namespace App\Http\Controllers;

// use Goutte\Client;
// use Carbon\Carbon;
// use Stock;
// use Subsector;
// use Price;
// use Input;
// use Exception;
// use Validator;

class MainController extends Controller {

	// public $base_url;

	// public function __construct() {
	// 	$this->base_url = 'http://www.londonstockexchange.com';
	// 	// $this->middleware('guest');
	// }

	public function estates() {
		return 'Villa project';
		// $stocks = Stock::orderBy('added_on', 'DESC')->get();
		// return view('stock_list', compact('stocks'));
	}

// 	public function cron() {
// 		$pass = Input::get('pass');

// 		if ('bzzz12345678987654321' != $pass) {
// 			throw new Exception("Your authorization attempt failed.");
// 		}

// 		$today = Carbon::today()->dayOfWeek;
// 		if (Carbon::SUNDAY === $today or Carbon::SATURDAY === $today) {
// 			throw new Exception("LSE doesn't work on weekends.");
// 		}

// 		$this->update_prices();
// 	}

// 	public function remove_stock($stock_id) {
// 		// Stock::where('stock_')
// 	}

// 	public function add_stock() {
// 		$code = Input::get('code');
// 		$code = strtoupper($code);
// 		$code = trim($code);

// 		$fields = ['code' => $code];
// 		$rule_unique = ['code'	=> 'unique:stocks'];
// 		$rule_require = ['code'	=> 'required'];

// 		$validator = Validator::make($fields, $rule_unique);
// 		if ($validator->fails()) {
// 			return redirect()->back()->withErrors("Stock with code \"{$code}\" already exists!");
// 		}

// 		$validator = Validator::make($fields, $rule_require);
// 		if ($validator->fails()) {
// 			return redirect()->back()->withErrors("Stock code could not be empty!");
// 		}

// 		$data = [];
// 		$data['code'] = $code;

// 		$client = new Client();
// 		$base_url = 'http://www.londonstockexchange.com';
// 		$search_stock_url = $this->base_url.'/exchange/prices-and-markets/stocks/prices-search/stock-prices-search.html?nameCode='.$code;
// 		$crawler = $client->request('GET', $search_stock_url);

// 		/*------------------------------------------------
// 		| Verify user's $code over LSE
// 		------------------------------------------------*/
// 		try {
// 			$real_code = $crawler->filter('.table_dati tbody tr')->first()->filter('td')->eq(0)->text();
// 		} catch (Exception $e) {
// 			return redirect()->back()->withErrors("Stock code \"{$code}\" is incorrect!");
// 		}
// 		if ($real_code != $code) {
// 			return redirect()->back()->withErrors("Stock code \"{$code}\" is incorrect!");
// 		}
// 		/*----------------------------------------------*/

// 		$search_href = $crawler->filter('.table_dati tbody tr')->first()->filter('td')->eq(1)->filter('a')->attr('href');
// 		$stock_url = $this->base_url.$search_href;
// 		$crawler = $client->request('GET', $stock_url);

// 		// NAME
// 		$name = $crawler->filter('.tesummary')->text();
// 		$name = $this->stringify($name);
// 		$name = substr($name, strlen($code)+1);
// 		$data['name'] = $name;

// 		// CURRENCY
// 		$currency = $crawler->filter('.company-title-name')->text();
// 		$currency = $this->stringify($currency);
// 		$currency_ascii = substr(substr(mb_convert_encoding($currency, 'ascii'), -4), 0, 3);
// 		$currency = mb_convert_encoding($currency_ascii, 'utf-8');
// 		$data['currency'] = $currency;

// 		------------------------------------------------
// 		| SUBSECTOR MODEL
// 		------------------------------------------------
// 		// SECTOR
// 		$sector = $crawler->filter('.table_dati')->eq(1)->filter('tbody tr')->eq(1)->filter('td')->eq(1)->text();
// 		$sector = $this->stringify($sector);

// 		// SUBSECTOR
// 		$subsector = $crawler->filter('.table_dati')->eq(1)->filter('tbody tr')->eq(2)->filter('td')->eq(1)->text();
// 		$subsector = $this->stringify($subsector);

// 		$subsector = Subsector::firstOrCreate([
// 			'sector' 	=> $sector,
// 			'subsector' => $subsector,
// 		]);
// 		/*----------------------------------------------*/

// 		$data['subsector_id'] = $subsector->subsector_id;
// 		$data['added_on'] = Carbon::now();
		
// 		Stock::firstOrCreate($data);
// 		return redirect()->back()->with('message', 'Stock successfully added.');
// 	}
	
// /*------------------------------------------------
// | PRIVATE METHODS
// ------------------------------------------------*/
// 	private function update_prices() {
// 		$stocks = Stock::all();

// 		foreach ($stocks as $stock) {
// 			// VERIFY LAST CLOSE
// 			$last = Price::where('stock_id', $stock->stock_id)->orderBy('date', 'DESC')->first();
// 			if (isset($last) and Carbon::today() <= Carbon::parse($last->date)) {
// 				continue;
// 			}

// 			$data = [];

// 			$data['stock_id'] = $stock->stock_id;
// 			$code = $stock->code;

// 			$client = new Client();
// 			$search_stock_url = $this->base_url.'/exchange/prices-and-markets/stocks/prices-search/stock-prices-search.html?nameCode='.$code;
// 			$crawler = $client->request('GET', $search_stock_url);

// 			$search_href = $crawler->filter('.table_dati tbody tr')->first()->filter('td')->eq(1)->filter('a')->attr('href');
// 			$stock_url = $this->base_url.$search_href;

// 			$crawler = $client->request('GET', $stock_url);

// 			// PRICE
// 			$price = $crawler->filter('.commonTable')->eq(0)->filter('tbody td')->eq(0)->text();
// 			$data['price'] = $price;

// 			// HIGH
// 			$high = $crawler->filter('.commonTable')->eq(0)->filter('tbody td')->eq(1)->text();
// 			$data['high'] = $high;

// 			// LOW
// 			$low = $crawler->filter('.commonTable')->eq(0)->filter('tbody td')->eq(2)->text();
// 			$data['low'] = $low;

// 			// VOLUME
// 			$volume = $crawler->filter('.commonTable')->eq(0)->filter('tbody td')->eq(3)->text();
// 			$volume = str_replace(",", "", $volume);
// 			$data['volume'] = $volume;

// 			// DELTA
// 			$delta = $crawler->filter('.commonTable')->eq(0)->filter('tbody td')->eq(5)->text();
// 			$delta = $this->stringify($delta);
// 			$data['delta'] = $delta;

// 			// DATE
// 			$data['date'] = Carbon::now();

// 			Price::create($data);
// 		}

// 		throw new Exception("ALL PRICES ARE UP TO DATE.");
// 	}

// 	private function stringify($str) {
// 		$str = str_replace("\r\n", " ", $str);
// 		$str = trim($str);
// 		return $str;
// 	}
// }
