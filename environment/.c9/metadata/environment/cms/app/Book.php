{"filter":false,"title":"Book.php","tooltip":"/cms/app/Book.php","undoManager":{"mark":55,"position":55,"stack":[[{"start":{"row":9,"column":4},"end":{"row":17,"column":5},"action":"insert","lines":["    public function getUserTimeLine(Int $user_id)","    {","        return $this->where('user_id', $user_id)->orderBy('created_at', 'DESC')->paginate(50);","    }","","    public function getTweetCount(Int $user_id)","    {","        return $this->where('user_id', $user_id)->count();","    }"],"id":2}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":8},"action":"remove","lines":["    "],"id":3}],[{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"remove","lines":["t"],"id":4},{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"remove","lines":["e"]},{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"remove","lines":["e"]},{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"remove","lines":["w"]},{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"remove","lines":["T"]}],[{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"insert","lines":["B"],"id":5},{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"insert","lines":["o"]},{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"insert","lines":["o"]},{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"insert","lines":["k"]}],[{"start":{"row":14,"column":20},"end":{"row":14,"column":32},"action":"remove","lines":["getBookCount"],"id":6},{"start":{"row":14,"column":20},"end":{"row":14,"column":32},"action":"insert","lines":["getBookCount"]}],[{"start":{"row":8,"column":20},"end":{"row":8,"column":21},"action":"insert","lines":[" "],"id":7},{"start":{"row":8,"column":21},"end":{"row":9,"column":0},"action":"insert","lines":["",""]},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":7},"action":"insert","lines":["// "],"id":8}],[{"start":{"row":9,"column":7},"end":{"row":9,"column":11},"action":"insert","lines":["描き追加"],"id":9}],[{"start":{"row":9,"column":10},"end":{"row":9,"column":11},"action":"remove","lines":["加"],"id":10},{"start":{"row":9,"column":9},"end":{"row":9,"column":10},"action":"remove","lines":["追"]},{"start":{"row":9,"column":8},"end":{"row":9,"column":9},"action":"remove","lines":["き"]},{"start":{"row":9,"column":7},"end":{"row":9,"column":8},"action":"remove","lines":["描"]}],[{"start":{"row":9,"column":7},"end":{"row":9,"column":9},"action":"insert","lines":["追加"],"id":11}],[{"start":{"row":4,"column":39},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":14}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":3},"action":"insert","lines":["// "],"id":15}],[{"start":{"row":5,"column":3},"end":{"row":5,"column":5},"action":"insert","lines":["追加"],"id":16}],[{"start":{"row":5,"column":5},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":17}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":45},"action":"insert","lines":["use Illuminate\\Database\\Eloquent\\softDeletes;"],"id":18}],[{"start":{"row":9,"column":1},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":19},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":10,"column":4},"end":{"row":10,"column":20},"action":"insert","lines":["use SoftDeletes;"],"id":20}],[{"start":{"row":10,"column":20},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":21},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":4},"end":{"row":12,"column":0},"action":"insert","lines":["",""]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":12,"column":4},"end":{"row":14,"column":6},"action":"insert","lines":["protected $fillable = [","        'text'","    ];"],"id":22}],[{"start":{"row":14,"column":6},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":23},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":4},"end":{"row":16,"column":0},"action":"insert","lines":["",""]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":1},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":24},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":10,"column":4},"end":{"row":10,"column":7},"action":"insert","lines":["// "],"id":25}],[{"start":{"row":10,"column":7},"end":{"row":10,"column":9},"action":"insert","lines":["追加"],"id":26}],[{"start":{"row":16,"column":4},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":27},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":17,"column":4},"end":{"row":21,"column":0},"action":"insert","lines":["public function user()","    {","        return $this->belongsTo(User::class);","    }",""],"id":28}],[{"start":{"row":20,"column":5},"end":{"row":21,"column":0},"action":"remove","lines":["",""],"id":29}],[{"start":{"row":5,"column":0},"end":{"row":6,"column":45},"action":"remove","lines":["// 追加","use Illuminate\\Database\\Eloquent\\softDeletes;"],"id":30},{"start":{"row":4,"column":39},"end":{"row":5,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":8,"column":0},"end":{"row":9,"column":20},"action":"remove","lines":["    // 追加","    use SoftDeletes;"],"id":31},{"start":{"row":7,"column":1},"end":{"row":8,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":7},"action":"insert","lines":["// "],"id":32}],[{"start":{"row":8,"column":7},"end":{"row":8,"column":9},"action":"insert","lines":["追加"],"id":33}],[{"start":{"row":17,"column":4},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":34},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":18,"column":4},"end":{"row":21,"column":5},"action":"insert","lines":["    public function user()","    {","        return $this->belongsTo(User::class);","    }"],"id":35}],[{"start":{"row":18,"column":5},"end":{"row":18,"column":8},"action":"remove","lines":["   "],"id":36},{"start":{"row":18,"column":4},"end":{"row":18,"column":5},"action":"remove","lines":[" "]}],[{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"remove","lines":["r"],"id":37},{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"remove","lines":["e"]},{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"remove","lines":["s"]},{"start":{"row":18,"column":20},"end":{"row":18,"column":21},"action":"remove","lines":["u"]}],[{"start":{"row":18,"column":20},"end":{"row":18,"column":21},"action":"insert","lines":["f"],"id":38},{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"insert","lines":["a"]},{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"insert","lines":["r"]},{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"insert","lines":["b"]}],[{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"remove","lines":["b"],"id":39}],[{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"insert","lines":["v"],"id":40}],[{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"remove","lines":["v"],"id":41},{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"remove","lines":["r"]}],[{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"insert","lines":["r"],"id":42},{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"insert","lines":["v"]}],[{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"remove","lines":["v"],"id":43},{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"remove","lines":["r"]},{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"remove","lines":["a"]}],[{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"insert","lines":["v"],"id":44}],[{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"remove","lines":["v"],"id":45}],[{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"insert","lines":["a"],"id":46},{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"insert","lines":["v"]}],[{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"remove","lines":["v"],"id":47},{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"remove","lines":["a"]}],[{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"insert","lines":["a"],"id":48},{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"insert","lines":["v"]},{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"insert","lines":["o"]},{"start":{"row":18,"column":24},"end":{"row":18,"column":25},"action":"insert","lines":["u"]},{"start":{"row":18,"column":25},"end":{"row":18,"column":26},"action":"insert","lines":["r"]},{"start":{"row":18,"column":26},"end":{"row":18,"column":27},"action":"insert","lines":["i"]}],[{"start":{"row":18,"column":27},"end":{"row":18,"column":28},"action":"insert","lines":["t"],"id":49},{"start":{"row":18,"column":28},"end":{"row":18,"column":29},"action":"insert","lines":["e"]}],[{"start":{"row":18,"column":29},"end":{"row":18,"column":30},"action":"insert","lines":["s"],"id":50}],[{"start":{"row":18,"column":24},"end":{"row":18,"column":25},"action":"remove","lines":["u"],"id":51}],[{"start":{"row":21,"column":5},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":52},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":20,"column":22},"end":{"row":20,"column":31},"action":"remove","lines":["belongsTo"],"id":53},{"start":{"row":20,"column":22},"end":{"row":20,"column":23},"action":"insert","lines":["h"]},{"start":{"row":20,"column":23},"end":{"row":20,"column":24},"action":"insert","lines":["a"]},{"start":{"row":20,"column":24},"end":{"row":20,"column":25},"action":"insert","lines":["s"]},{"start":{"row":20,"column":25},"end":{"row":20,"column":26},"action":"insert","lines":["m"]}],[{"start":{"row":20,"column":26},"end":{"row":20,"column":27},"action":"insert","lines":["a"],"id":54}],[{"start":{"row":20,"column":26},"end":{"row":20,"column":27},"action":"remove","lines":["a"],"id":55},{"start":{"row":20,"column":25},"end":{"row":20,"column":26},"action":"remove","lines":["m"]}],[{"start":{"row":20,"column":25},"end":{"row":20,"column":26},"action":"insert","lines":["M"],"id":56},{"start":{"row":20,"column":26},"end":{"row":20,"column":27},"action":"insert","lines":["a"]},{"start":{"row":20,"column":27},"end":{"row":20,"column":28},"action":"insert","lines":["n"]},{"start":{"row":20,"column":28},"end":{"row":20,"column":29},"action":"insert","lines":["y"]}],[{"start":{"row":20,"column":33},"end":{"row":20,"column":34},"action":"remove","lines":["r"],"id":57},{"start":{"row":20,"column":32},"end":{"row":20,"column":33},"action":"remove","lines":["e"]},{"start":{"row":20,"column":31},"end":{"row":20,"column":32},"action":"remove","lines":["s"]},{"start":{"row":20,"column":30},"end":{"row":20,"column":31},"action":"remove","lines":["U"]}],[{"start":{"row":20,"column":30},"end":{"row":20,"column":31},"action":"insert","lines":["F"],"id":58},{"start":{"row":20,"column":31},"end":{"row":20,"column":32},"action":"insert","lines":["a"]}],[{"start":{"row":20,"column":30},"end":{"row":20,"column":32},"action":"remove","lines":["Fa"],"id":59},{"start":{"row":20,"column":30},"end":{"row":20,"column":38},"action":"insert","lines":["Favorite"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":25,"column":27},"end":{"row":25,"column":35},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":1,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1618204842732,"hash":"1adb15bc1beea57d032a9e4f39afb13863318138"}