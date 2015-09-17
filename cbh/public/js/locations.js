var locations = [
    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.87, 2.29, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-01.jpg"), globalImgUrl.concat("/property-types/apartment.png")],
    ['3398 Lodgeville Road', "Golden Valley, MN 55427", "$28,000", 48.866876, 2.309639, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-02.jpg"), globalImgUrl.concat("/property-types/apartment.png")],

    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.874796, 2.299275, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-03.jpg"), globalImgUrl.concat("/property-types/construction-site.png")],
    ['3398 Lodgeville Road', "Golden Valley, MN 55427", "$28,000", 48.864194, 2.288868, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-04.jpg"), globalImgUrl.concat("/property-types/cottage.png")],
    ['3398 Lodgeville Road', "Golden Valley, MN 55427", "$28,000", 48.881187, 2.276938, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-06.jpg"), globalImgUrl.concat("/property-types/garage.png")],
    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.859098, 2.423515, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-08.jpg"), globalImgUrl.concat("/property-types/houseboat.png")],
    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.872296, 2.287796, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-07.jpg"), globalImgUrl.concat("/property-types/land.png")],

    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.874457, 2.254386, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-09.jpg"), globalImgUrl.concat("/property-types/single-family.png")],
    ['3398 Lodgeville Road', "Golden Valley, MN 55427", "$28,000", 48.875191, 2.252412, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-10.jpg"), globalImgUrl.concat("/property-types/villa.png")],
    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.864352, 2.257218, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-11.jpg"), globalImgUrl.concat("/property-types/vineyard.png")],
    ['3398 Lodgeville Road', "Golden Valley, MN 55427", "$28,000", 48.858648, 2.273526, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-12.jpg"), globalImgUrl.concat("/property-types/warehouse.png")],
    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.856277, 2.264256, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-13.jpg"), globalImgUrl.concat("/property-types/industrial-site.png")],

    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.859988, 2.252991, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-01.jpg"), globalImgUrl.concat("/property-types/apartment.png")],
    ['3398 Lodgeville Road', "Golden Valley, MN 55427", "$28,000", 48.856954, 2.283912, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-05.jpg"), globalImgUrl.concat("/property-types/condominium.png")],
    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.879268, 2.270672, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-06.jpg"), globalImgUrl.concat("/property-types/construction-site.png")],
    ['3398 Lodgeville Road', "Golden Valley, MN 55427", "$28,000", 48.875925, 2.3239098, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-03.jpg"), globalImgUrl.concat("/property-types/cottage.png")],
    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.870393, 2.327771, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-04.jpg"), globalImgUrl.concat("/property-types/houseboat.png")],

    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.880328, 2.307258, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-08.jpg"), globalImgUrl.concat("/property-types/land.png")],
    ['3398 Lodgeville Road', "Golden Valley, MN 55427", "$28,000", 48.880284, 2.306721, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-09.jpg"), globalImgUrl.concat("/property-types/single-family.png")],
    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.860342, 2.304597, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-10.jpg"), globalImgUrl.concat("/property-types/vineyard.png")],
    ['3398 Lodgeville Road', "Golden Valley, MN 55427", "$28,000", 48.852549, 2.329574, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-11.jpg"), globalImgUrl.concat("/property-types/warehouse.png")],
    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.857124, 2.316699, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-12.jpg"), globalImgUrl.concat("/property-types/empty.png")],

    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.869433, 2.315068, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-13.jpg"), globalImgUrl.concat("/property-types/apartment.png")],
    ['3398 Lodgeville Road', "Golden Valley, MN 55427", "$28,000", 48.885916, 2.297130, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-01.jpg"), globalImgUrl.concat("/property-types/industrial-site.png")],
    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.893534, 2.276616, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-02.jpg"), globalImgUrl.concat("/property-types/construction-site.png")],
    ['3398 Lodgeville Road', "Golden Valley, MN 55427", "$28,000", 48.872570, 2.237349, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-03.jpg"), globalImgUrl.concat("/property-types/cottage.png")],
    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.879344, 2.226191, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-04.jpg"), globalImgUrl.concat("/property-types/garage.png")],
    
    ['63 Commerford Street', 'Thorold, ON', '$3,600', 43.109594, -79.220240, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-04.jpg"),  globalImgUrl.concat("/property-types/single-family.png")],
    //In the future, we can write to this file with the addresses using AJAX, php would normally echo it so just write results to the file and it's the same.
    //http://stackoverflow.com/questions/23740548/how-to-pass-variables-and-data-from-php-to-javascript

     /*
    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.860374, 2.222242, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-05.jpg"), globalImgUrl.concat("/property-types/condominium.png")],
    ['3398 Lodgeville Road', "Golden Valley, MN 55427", "$28,000", 48.845917, 2.265673, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-06.jpg"), globalImgUrl.concat("/property-types/cottage.png")],
    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.843092, 2.306013, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-07.jpg"), globalImgUrl.concat("/property-types/warehouse.png")],
    ['3398 Lodgeville Road', "Golden Valley, MN 55427", "$28,000", 48.887697, 2.332277, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-08.jpg"), globalImgUrl.concat("/property-types/apartment.png")],
    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.871441, 2.347555, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-07.jpg"), globalImgUrl.concat("/property-types/empty.png")],

    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.832438, 2.369270, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-09.jpg"), globalImgUrl.concat("/property-types/apartment.png")],
    ['3398 Lodgeville Road', "Golden Valley, MN 55427", "$28,000", 48.803954, 2.275200, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-10.jpg"), globalImgUrl.concat("/property-types/apartment.png")],
    ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.879183, 2.252133, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-11.jpg"), globalImgUrl.concat("/property-types/construction-site.png")],

     ['3398 Lodgeville Road', "Golden Valley, MN 55427", "$28,000", 48.845092, 2.187996, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-06.jpg"), globalImgUrl.concat("/property-types/cottage.png")],
     ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.909218, 2.179756, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-07.jpg"), globalImgUrl.concat("/property-types/single-family.png")],

     ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.910120, 2.352104, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-01.jpg"), globalImgUrl.concat("/property-types/warehouse.png")],
     ['3398 Lodgeville Road', "Golden Valley, MN 55427", "$28,000", 48.867681, 2.396736, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-05.jpg"), globalImgUrl.concat("/property-types/empty.png")],
     ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.826109, 2.350731, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-06.jpg"), globalImgUrl.concat("/property-types/industrial-site.png")],
     ['3398 Lodgeville Road', "Golden Valley, MN 55427", "$28,000", 48.794908, 2.353477, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-03.jpg"), globalImgUrl.concat("/property-types/warehouse.png")],
     ['2479 Murphy Court', "Minneapolis, MN 55402", "$36,000", 48.859098, 2.423515, globalPropertyDetailUrl, globalImgUrl.concat("/properties/property-04.jpg"), globalImgUrl.concat("/property-types/empty.png")]

     */
];