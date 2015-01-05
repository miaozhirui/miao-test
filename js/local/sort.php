<script type="text/javascript">
// 将数组从大到小进行排序（快速排序法）
var arr = [3,2,4,6,1,5];
     function sort(arr) {
        if(arr.length>1) {
            var x = [];
            var y = [];
            var k = arr[0];
            for(var i in arr) {
                if(i == 0) continue;    
                if(arr[i] <k) {
                    x.push(arr[i])
                }else{
                    y.push(arr[i]);
                }
            }
            x = sort(x);
            y = sort(y);
            return x.concat(k).concat(y)
        }else{
            return arr
        }
    }
  var result = sort(arr)
  var hou = []
  // js获得0到100的随机数
  // for (var i=0 ; i<10; i++) {
  //   // hou.push(Math.floor(Math.random()*(start-end)+end))
  //   hou.push(Math.floor(Math.random()*100)
  //   // 取得任意之间的随机数
  // }
  // // console.log(hou)
  // var arr1 =  [114, 64, 137, 78, 71, 122, 77, 55, 101, 76];
  // console.log(sort(arr1))
  console.profile();
  var result = sort(result);
  console.log(result)
  console.profileEnd()
</script>