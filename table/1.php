[
    {name: 'Close', stack: 'Funding', data: {'June': 1, 'November': 0}},
    {name: 'Open', stack: 'Hotdesk Community', data: {'June': 1, 'November': 0}},
    ...
    {name: 'In-Process', stack: 'Funding', data: {'November': 2, 'June': 2}}

]


找到所有的月

['June', 'November']

{'June': 1, 'November': 0} => [1, 0]
{'June': 1, 'November': 0} => [1, 0]
...
{'November': 2, 'June': 2} => [2, 2]

置换


[
    {name: 'Close', stack: 'Funding', data: [1, 0]},
    {name: 'Open', stack: 'Hotdesk Community', data: [1, 0]},
    ...
    {name: 'In-Process', stack: 'Funding', data: [2, 2]}

]




[
    {name: 'Close', stack: 'Funding', data: {'June': 1, 'November': 0}},
    {name: 'Open', stack: 'Hotdesk Community', data: {'June': 1, 'November': 0}},
    ...
    {name: 'In-Process', stack: 'Funding', data: {'November': 2, 'June': 2}}

]


找到所有的月

['June', 'November']

{'June': 1, 'November': 0} => [1, 0]
{'June': 1, 'November': 0} => [1, 0]
...
{'November': 2, 'June': 2} => [2, 2]

置换


[
    {name: 'Close', stack: 'Funding', data: [1, 0]},
    {name: 'Open', stack: 'Hotdesk Community', data: [1, 0]},
    ...
    {name: 'In-Process', stack: 'Funding', data: [2, 2]}

]

舒攀 2014/8/12 19:33:58
_.groupBy(data, function(item) {
    return item.status + '#' + item.type;
})
19:38:44
舒攀 2014/8/12 19:38:44

[
    {name: 'Close', stack: 'Funding', data: {'June': 1}},
    {name: 'Open', stack: 'Hotdesk Community', data: {'June': 1}},
    ...
    {name: 'In-Process', stack: 'Funding', data: {'November': 2, 'June': 2}}

]


找到所有的月

['June', 'November'] => [0, 0]

{'June': 1} => [1, 0]
{'June': 1} => [1, 0]
...
{'November': 2, 'June': 2} => [2, 2]

置换


[
    {name: 'Close', stack: 'Funding', data: [1, 0]},
    {name: 'Open', stack: 'Hotdesk Community', data: [1, 0]},
    ...
    {name: 'In-Process', stack: 'Funding', data: [2, 2]}

]