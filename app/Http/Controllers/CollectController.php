<?php

namespace App\Http\Controllers;

use App\Collect;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class Currency
{
    /**
     * Create a new currency instance.
     *
     * @param  string  $code
     * @return void
     */
    function __construct(string $code)
    {
        $this->code = $code;
    }
}

class CollectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$collection = collect(['taylor', 'abigail', null])->map(function($item){
            return strtoupper($item);
        })->reject(function($item){
            return empty($item);
        });*/

        // 自定义宏
        /*Collection::macro('toUpper', function(){
            return $this->map(function($value){
                return Str::upper($value);
            });
        });

        $collection = collect(['taylor', 'alibaba'])->toUpper();*/

        // 返回所有
//        $collection = collect(['atylor', 'alibaba'])->all();

        // 返回集合的平均值
//        $collection = collect([1,2,3,4,5])->avg();
//        $collection = collect([['key' => 1], ['key' => 2], ['kkk' => 3]])->avg('key');

        // chunk
//        $collection = collect([1,2,3,4,5,6,7,8,9])->chunk(4)->toArray();

        // collapse 将二维数组拍平
//        $collection = collect([[1,[2,3]], [4,5,[6, [7,8]]]])->collapse()->all();
//        $collection = collect([[1,2,3], [4,5]])->collapse()->all();

        // 将数组的键和值组合成新的数组
//        $collection = collect(['name', 'age'])->combine(['hsx', 28])->all();

        // 数组添加
//        $collection = collect(['chl'])->concat(['hsx'])->concat(['wym'])->all();

        // 包含
//        $collection = collect(['name' => 'chl', 'age' => 18, 'address' => '北京海淀'])->contains('chj');
//        $collection = collect([
//            ['name' => 'chl', 'age' => 18, 'address' => '北京海淀'],
//            ['name' => 'hsx', 'age' => 21, 'address' => '北京海淀'],
//        ])->contains('name', 'chl');

        // 返回集合中的总数count
//        $collection = collect(['name' => 'chl', 'age' => 18, 'address' => '北京海淀'])->count();

        // 计算集合中值出现的次数
//        $collection = collect([1,2,3,3,4,4,5,6,2,3])->countBy()->all();
//        $collection = collect(['yahoo@yahoo.com', 'tianmao@gmail.com', 'yh@yahoo.com'])->countBy(function($item){
//            return substr(strrchr($item, '@'), 1);
//        })->all();

        // 返回多个集合的笛卡尔积
//        $collection = collect([1,2])->crossJoin(['a', 'b'], ['m', 'n'])->all();

        // 比较多个集合并返回不同的部分
//        $collection = collect([0,1,2,3])->diff(collect([2,3,4,5]))->all();
//        $collection = collect([0,1,2,3])->diff([2,3,4,5])->all();

        // 基于键值对比较
//        $collection = collect([
//            'name' => 'chl',
//            'addr' => '北京海淀',
//            'age' => 18
//        ])->diffAssoc([
//            'name' => 'hsx',
//            'addr' => '北京海淀',
//            'age' => 20
//        ])->all();

        // 基于键比较
//        $collection = collect([
//            'one' => 1,
//            'two' => 2,
//            'three' => 3,
//        ])->diffKeys([
//            'one' => 1,
//            'four' => 3
//        ])->all();

        // each 迭代，在闭包里返回false结束迭代
//        $collection = collect([1,2,3])->each(function($key, $val){
//            if( $val == 2 ) return false;
//            echo $key.' : '.$val."<br>";
//        });

        // 迭代集合项，传递每个嵌套数据项值到给定集合
//        $collection = collect([
//            ['chl', 18],
//            ['hsx', 20]
//        ])->eachSpread(function($name, $age){
//            printf('%s : %s', $name, $age);
//        });

        // 验证集合中的每个元素能否通过真理测试， 如果集合为空，返回true
//        $collection = collect([1,2,3,4])->every(function($val, $key){
//            return $val > 0;
//        });

        // 从集合中返回除了指定键的其他元素
//        $collection = collect([
//            'name' => 'chl',
//            'age' => 18,
//            'addr' => '北京海淀'
//        ])->except(['age'])->all();

        // 过滤集合
//        $collection = collect([1,2,3,4])->filter(function($val){
//            return $val > 2;
//        })->all();

//        $collection = collect([1,0,2, '0', null, 3,4, [], false])->filter()->all();

        // 返回集合中符合条件测试的第一个元素
//        $collection = collect([1,2,3,4])->first(function($val){
//            return $val > 1;
//        });
//        $collection = collect([1,2,3,4])->first();

        // firstWhere 方法会返回集合中的第一个元素，包含键值对
//        $collection = collect([
//            ['name' => 'chl', 'age' => 18],
//            ['name' => 'hsx', 'age' => 19],
//            ['name' => 'chl', 'age' => 20],
//        ])->firstWhere('age', '>', 18);

//        $collection = collect([
//            ['name' => 'chl', 'age' => 18],
//            ['name' => 'hsx', 'age' => 19],
//            ['name' => 'chl', 'age' => 20],
//        ])->firstWhere('age');

        // zip
//        $collection = collect([1,2,3,4])->zip(['a', 'b', 'c', 'd'])->toArray();

        // wrap
//        $collection = collection::wrap('chl')->all();

        // whereNotIn 通过给定的键值排除
//        $collection = collect([
//            ['name' => 'chl', 'age' => 18],
//            ['name' => 'hsx', 'age' => 22],
//            ['name' => 'wym', 'age' => 30],
//            ['name' => 'wyh', 'age' => 40],
//        ])->whereNotIn('age', [18, 22, 40])->all();

        // whereNotBetween 通过给定范围排序
//        $collection = collect([
//            ['name' => 'chl', 'age' => 18],
//            ['name' => 'hsx', 'age' => 22],
//            ['name' => 'wym', 'age' => 30],
//            ['name' => 'wyh', 'age' => 40],
//        ])->whereNotBetween('age', [25, 40])->all();

        // whereInstanceOf 通过给定类的类型过滤集合
//        $collection = collect([
//            new User,
//            new User,
//            new Post
//        ])->whereInstanceOf(User::class);

        // where 方法通过给定键值对过滤集合：
//        $collection = collect([
//            ['name' => 'chl', 'age' => 18],
//            ['name' => 'hsx', 'age' => 22],
//            ['name' => 'wym', 'age' => 30],
//            ['name' => 'wyh', 'age' => 40],
//        ])->where('age', 22)->all();

        // 当集合不为空时，执行给定的集合
//        $collection = collect(['chl', 'hsx'])->whenNotEmpty(function($col){
//            return $col->push('adm');
//        })->all();

//        $collection = collect()->whenNotEmpty(function($col){
//            return $col->push('iron');
//        })->all();

        // 当集合为空时，执行指定的集合
//        $collection = collect(['chl'])->whenEmpty(function($col){
//            return $col->push('hello');
//        })->all();

//        $collection = collect([])->whenEmpty(function($col){
//            return $col->push('hello');
//        })->all();

        // 在第一个参数为true时，触发回调函数
//        $collection = collect([1,2,3])->when(false, function($col){
//            return $col->push(4);
//        })->all();

        // 抽取集合键值对的值
//        $collection = collect([
//            10 => ['name' => 'chl', 'age' => 18],
//            12 => ['name' => 'hsx', 'age' => 20],
//        ])->values()->all();

        // 静态方法unwrap
//        $collection = Collection::unwrap(collect([1,2,3,4]));

        // unless:当条件false，指定回调
//        $collection = collect([1,2,3,4])->unless(true, function($col){
//            return $col->push(5);
//        })->all();

        // union添加数组到集合，如果数组中的某些键在集合中已存在。不会合并已存在的键
//        $collection = collect([
//            0 => 'chl',
//            1 => '北京海淀'
//        ])->union([
//            2 => '男',
//            0 => 'hsx'
//        ])->all();

        // 去重复unique
//        $collection = collect([1,2,2,3,1,4])->unique()->all();
//        $collection = collect([
//            ['name' => 'iphone6', 'brand' => 'apple'],
//            ['name' => 'iphone5', 'brand' => 'apple'],
//            ['name' => 'apple watch', 'brand' => 'apple'],
//            ['name' => 'glaxy s6', 'brand' => 'sumung'],
//        ])->unique('brand')->all();
//        $collection = collect([
//            ['name' => 'iphone6', 'brand' => 'apple'],
//            ['name' => 'iphone5', 'brand' => 'apple'],
//            ['name' => 'apple watch', 'brand' => 'apple'],
//            ['name' => 'glaxy s6', 'brand' => 'sumung'],
//        ])->unique(function($item){
//            return $item['name'].$item['brand'];
//        })->all();

        // 对集合的每个元素执行回调,会改变原集合（map不会改变原集合）
//        $collection = collect([1,2,3])->transform(function($value){
//            return $value * $value;
//        })->all();

        // 变为json字符串
//        $collection = collect(['name' => 'chl', 'age' => 20])->toJson();

        // 静态方法times(),创建一个新的集合
//        $collection = Collection::times(5, function($num){
//            return 'num'.$num;
//        })->all();

        // sort 排序
//        $collection = collect([4,2,5,3,7,1])->sort()->all();

        // 从集合中取出一段生成新的集合
//        $collection = collect([1,2,3,4])->take(-2)->all();

        // 求和sum
//        $collection = collect([1,2,3,4])->sum();
//        $collection = collect([
//            ['name' => 'chl', 'age' => 12],
//            ['name' => 'hsx', 'age' => 18],
//        ])->sum('age');

//        $collection = collect([
//            ['name' => 'chl', 'color' => ['red']],
//            ['name' => 'hsx', 'color' => ['red', 'green']],
//            ['name' => 'wym', 'color' => ['yello']],
//            ['name' => 'wyh', 'color' => ['blue']],
//        ])->sum(function($item){
//            return count($item['color']);
//        });

        // 将集合切成指定的分数split
//        $collection = collect([1,2,3,4,5,6,7])->split(4)->toArray();

        // 集合切片
//        $collection = collect([1,2,3,4,5]);
//        $chunk = $collection->splice(2, 1, [6,7])->all();
//        dd($collection, $chunk);


        // 对集合的键排序sortKeys
//        $collection = collect([
//            'id' => 520,
//            'first' => 'chl',
//            'last' => 'hsx'
//        ])->sortKeys()->all();

        // 对集合的键逆序排序sortKeysDesc
//        $collection = collect([
//            'id' => 520,
//            'first' => 'chl',
//            'last' => 'hsx'
//        ])->sortKeysDesc()->all();

        // sortBy 方法通过给定键对集合进行排序， 排序后的集合保持原有数组索引
//        $collection = collect([
//            ['name' => 'Desk', 'price' => 200],
//            ['name' => 'Chair', 'price' => 100],
//            ['name' => 'Bookcase', 'price' => 150],
//        ])->sortBy('price')->all();

//        $collection = collect([
//            ['name' => 'Desk', 'colors' => ['Black', 'Mahogany']],
//            ['name' => 'Chair', 'colors' => ['Black']],
//            ['name' => 'Bookcase', 'colors' => ['Red', 'Beige', 'Brown']],
//        ])->sortBy(function($item){
//            return count($item['colors']);
//        })->all();

        // 随机打乱一个集合
//        $collection = collect([1,2,3,4,5,6])->shuffle()->all();

        // shift 方法从集合中移除并返回第一个数据项：
//        $collection = collect([1,2,3,4,5]);
//        $chunk = $collection->shift();

        // 过滤reject
//        $collection = collect([1,2,3,4,5])->reject(function($item){
//           return $item < 3;
//        })->all();

        // 逆序
//        $collection = collect(['a', 'b', 'c', 'd'])->reverse()->all();

        // 查找指定的值，返回键
//        $collection = collect(['chl', 'chj', 'hsx'])->search('hsx1');
//        $collection = collect([2,4,6,8])->search(function($item){
//            return $item > 3;
//        });

        // reduce 方法用于减少集合到单个值，传递每个迭代结果到子迭代
//        $collection = collect([1,2,3])->reduce(function($ini, $val){
//            return $ini + $val;
//        }, 4);

        // 返回随机数据项
//        $collection = collect([1,2,3,4,5])->random();

        // push 方法附加数据项到集合结尾
//        $collection = collect([1,2,3,4])->push(5)->all();

        // put 方法在集合中设置给定键和值
//        $collection = collect([
//            'name' => 'chl',
//            'age' => 18
//        ])->put('sex', 'male')->all();

        // pull 方法通过键从集合中移除并返回数据项
//        $collection = collect(['name' => 'chl', 'age' => 18]);
//        $res = $collection->pull('name');

        // prepend 方法添加数据项到集合开头
//        $collection = collect([1,2,3,4])->prepend('+0')->all();
//        $collection = collect(['one' => 1, 'two' => 2 ])->prepend(0, 'zero')->all();

        // pop

        // 获取指定键的集合pluck
//        $collection = collect([
//            ['name' => 'chl', 'age' => 18],
//            ['name' => 'hsx', 'age' => 20],
//            ['name' => 'chj', 'age' => 18],
//        ])->pluck('name', 'age')->all();

        // pipe 方法传递集合到给定回调并返回结果
//        $collection = collect([1,2,3])->pipe(function($col){
//            return $col->sum();
//        });

        // partition 方法可以和 PHP 函数 list 一起使用，从而将通过真理测试和没通过的分割开来
//        $collection = collect([7,3,4,2,6,1,8,5,9]);
//        list($lower, $high) = $collection->partition(function($val){
//            return $val < 5;
//        });
//        dd($lower, $high);

        // pad:集合填充
//        $collection = collect(['a', 'b', 'c'])->pad(-2, 0)->all();

        // only 方法返回集合中指定键的集合项
//        $collection = collect([
//            'name' => 'chl', 'age' => 18, 'addr' => '北京海淀'
//        ])->only('name', 'addr')->all();

        // nth方法组合集合中第 n-th 个元素创建一个新的集合
//        $collection = collect([
//            'a' , 'b', 'c', 'd', 'e', 'f', 'g', 'h'
//        ])->nth(3, 1)->all();

        // mode返回给定键的众数
//        $collection = collect([
//            ['foo' => 5], ['foo' => 5], ['foo' => 4]
//        ])->mode('foo');

        // min 方法返回集合中给定键的最小值
//        $collection = collect([
//            ['foo' => 5], ['foo' => 5], ['foo' => 4]
//        ])->min('foo');

        // median 方法会返回给定键的中位数
//        $collection = collect([
//            ['foo' => 1],
//            ['foo' => 10],
//            ['foo' => 12],
//        ])->median('foo');

        // keys 方法返回所有集合的键：
//        $collection = collect([
//            'prod-100' => ['product_id' => 'prod-100', 'name' => 'Desk'],
//            'prod-200' => ['product_id' => 'prod-200', 'name' => 'Chair'],
//        ])->keys()->all();

        // last 方法返回通过真理测试的集合的最后一个元素
//        $collection = collect([1,2,3,4])->last(function($val){
//            return $val < 3;
//        });

        // mapInto() 方法会迭代集合，通过传递值到构造器来为给定类创建新的实例
//        $collection = collect(['USD', 'EUR', 'GBP'])->mapInto(Currency::class)->all();

        // mapSpread 方法会迭代集合项，传递每个嵌套集合项值到给定回调。
//        $collection = collect([0,1,2,3,4,5,6,7,8,9])->chunk(2)->mapSpread(function($odd, $even){
//            return $odd + $even;
//        })->all();

        // mapToGroups 方法会通过给定回调对集合项进行分组，回调会返回包含单个键值对的关联数组，从而将分组后的值组合成一个新的集合
//        $collection = collect([
//        [
//            'name' => 'John Doe',
//            'department' => 'Sales',
//        ],
//        [
//            'name' => 'Jane Doe',
//            'department' => 'Sales',
//        ],
//        [
//            'name' => 'Johnny Doe',
//            'department' => 'Marketing',
//        ]
//        ])->mapToGroups(function($item){
//            return [$item['department'] => $item['name']];
//        })->get('Sales')->all();

        // mapWithKeys 方法对集合进行迭代并传递每个值到给定回调，该回调会返回包含键值对的关联数组
//        $collection = collect([
//        [
//            'name' => 'John Doe',
//            'department' => 'Sales',
//        ],
//        [
//            'name' => 'Jane Doe',
//            'department' => 'Sales',
//        ],
//        [
//            'name' => 'Johnny Doe',
//            'department' => 'Marketing',
//        ]
//        ])->mapWithKeys(function($item){
//            return [$item['department'] => $item['name']];
//        })->all();

        // flatMap 方法会迭代集合并传递每个值到给定回调，该回调可以自由编辑数据项并将其返回，最后形成一个经过编辑的新集合。然后，这个数组在层级维度被扁平化：
//        $collection = collect([
//            ['name' => 'chl'],
//            ['addr' => 'beijing haidian']
//        ])->flatMap(function($item){
//            return array_map('ucfirst', $item);
//        })->all();

        // 将多维数组降为一维
//        $collection = collect([
//            ['name' => 'chl'],
//            ['lang' => ['mysql', 'php']],
//            ['type' => [
//                'addr' => '北京海淀',
//                'colors' => ['blue', 'green']
//            ]]
//        ])->flatten(1)->all();

        // 键值交换
//        $collection = collect([
//            'name' => 'chl',
//            'addr' => 'bj'
//        ])->flip()->all();

        // 移除指定项forget
//        $collection = collect([
//            'name' => 'chl',
//            'addr' => 'bj'
//        ])->forget('name')->all();

        // forPage 方法返回新的包含给定页数数据项的集合。该方法接收页码数作为第一个参数，每页显示数据项数作为第二个参数：
//        $collection = collect([1,2,3,4,5,6,7,8,9,10])->forPage(2,3)->all();

        // get 方法返回给定键的数据项，如果对应键不存在，返回null
//        $collection = collect(['name' => 'taylor', 'framework' => 'laravel'])->get('framework2', 'default');

        // 分组
        $collection = collect([
            ['account_id' => 'account-x10', 'product' => 'Chair'],
            ['account_id' => 'account-x10', 'product' => 'Bookcase'],
            ['account_id' => 'account-x11', 'product' => 'Desk'],
        ]);
//        $collection = $collection->groupBy('account_id')->toArray();
//        $collection = $collection->groupBy(function($item){
//            return substr($item['account_id'], -3);
//        })->toArray();

        // has 方法判断给定键是否在集合中存在
//        $collection = collect(['account_id' => 1, 'product' => 'Desk', 'amount' => 5])->has('product', 'amount');

        // implode 方法连接集合中的数据项。其参数取决于集合中数据项的类型。如果集合包含数组或对象，应该传递你想要连接的属性键，以及你想要放在值之间的 “粘合”字符串：
//        $collection = collect([
//            ['account_id' => 1, 'product' => 'Desk'],
//            ['account_id' => 2, 'product' => 'Chair'],
//        ])->implode('product', ',');
//        $collection = collect([1,2,3,4,5])->implode('-');

        // intersect 方法返回两个集合的交集，结果集合将保留原来集合的键
//        $collection = collect(['chl', 'hsx', 'wym'])->intersect(['chl', 'wym', 'dwt'])->all();

        // intersectByKeys 方法会从原生集合中移除任意没有在给定数组或集合中出现的键：
//        $collection = collect([
//            'serial' => 'UX301', 'type' => 'screen', 'year' => 2009
//        ]);
//        $res = $collection->intersectByKeys([
//            'hello' => 'UX301', 'type' => 'tab', 'year' => 2011
//        ])->all();

        // join 方法用于将集合值通过字符串连接起来
        $collection = collect(['a', 'b', 'c', 'd'])->join(',', ' and ');
        dd($collection);
    }
}
