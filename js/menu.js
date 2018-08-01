var TripsArray =   
[ 
    [   
        "20160618_Mezhigorie",          // id     // start date
        "Межигорье",                    // title                 
        "",                             // end date
        "ukraine",                      // country id
        "Украина",                      // country TXT
        0,                              // sea tag
        1,                               // interesting tag
        0                               // not ready tag
    ],
    [   
        "20160830_Myrgorod",          // id     // start date
        "Миргород",                    // title                 
        "",                             // end date
        "ukraine",                      // country id
        "Украина",                      // country TXT
        0,                              // sea tag
        0,                               // interesting tag
        0                               // not ready tag
    ],
    [   
        "20170128_Konotop",          // id     // start date
        "Конотоп",                    // title                 
        "",                             // end date
        "ukraine",                      // country id
        "Украина",                      // country TXT
        0,                              // sea tag
        0,                               // interesting tag
        0                               // not ready tag
    ],
    [   
        "20160326_Konotop",          // id     // start date
        "Конотоп",                    // title                 
        "",                             // end date
        "ukraine",                      // country id
        "Украина",                      // country TXT
        0,                              // sea tag
        0,                               // interesting tag
        0                               // not ready tag
    ],
    [   
        "20151031_Haisyn_Uman",          // id     // start date
        "Гайсын, Умань",                    // title                 
        "20151101",                             // end date
        "ukraine",                      // country id
        "Украина",                      // country TXT
        0,                              // sea tag
        0,                               // interesting tag
        0                               // not ready tag
    ],
    [   
        "20160518_22_Eger",          // id     // start date
        "Egerszalok",                    // title                 
        "20160522",                             // end date
        "hungary",                      // country id
        "Hungary",                      // country TXT
        0,                              // sea tag
        0,                               // interesting tag
        0                               // not ready tag
    ],
    [   
        "20160701_24_Italy",          // id     // start date
        "Rimini",                    // title                 
        "20160724",                             // end date
        "italy",                      // country id
        "Italy",                      // country TXT
        1,                              // sea tag
        0,                               // interesting tag
        1                               // not ready tag
    ],
    [   
        "20160725_0807_Odessa",          // id     // start date
        "Сергеевка",                    // title                 
        "20160807",                             // end date
        "ukraine",                      // country id
        "Украина",                      // country TXT
        1,                              // sea tag
        0,                               // interesting tag
        1                               // not ready tag
    ],
    [   
        "20160814_24_Shadsk",          // id     // start date
        "Шацк",                    // title                 
        "20160824",                             // end date
        "ukraine",                      // country id
        "Украина",                      // country TXT
        1,                              // sea tag
        0,                               // interesting tag
        0                               // not ready tag
    ]

]

// var str = "Apple, Banana, Kiwi";
// var res = str.slice(7, 13);
// Banana
var i
var tripsArrayLen = TripsArray.length

document.write('<ul class="main-menu">')
//    document.write('<li><a href="?page=2016.06.18_Mezhigorie">Межигорье</a></li>\n')
    document.write('<li><a href="?complex=ukraine">Полный список</a>')
        document.write('<ul class="sub-menu">')
            for (i = 0; i < tripsArrayLen; i++) {             
                //document.write( '<li><a href="Travels/' + TripsArray[i][0] + '/' + 'page.html">' + TripsArray[i][1] + '</a></li>' );
                //document.write( '<li><a href="' + TripsArray[i][0] + '.html">' + TripsArray[i][1] + '</a></li>' );
                document.write( '<li><a href="blog.php?article=' + TripsArray[i][0] + '">' + TripsArray[i][1] + '</a></li>' );
            }
        document.write('</ul>')
    document.write('</li>')
document.write('</ul>')