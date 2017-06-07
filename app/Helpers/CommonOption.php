<?php 
namespace App\Helpers;

class CommonOption
{
	//status
    static function statusArray()
    {
        return array(ACTIVE=>'Kích hoạt', INACTIVE=>'Không kích hoạt');
    }
    static function getStatus($status=ACTIVE)
    {
    	$array = self::statusArray();
        if($status == ACTIVE) {
            return $array[$status];
        } else {
            return '<span style="color: red;">'.$array[$status].'</span>';
        }
    }
    //language
    static function langArray()
    {
        return array(VI=>'Tiếng việt'); //, EN=>'Tiếng anh'
    }
    static function getLang($lang=VI)
    {
    	$array = self::langArray();
        return $array[$lang];
    }
    //menu
    static function menuTypeArray()
    {
        return array(MENUTYPE1=>'Top menu', MENUTYPE2=>'Side menu');
    }
    static function getMenuType($menuType=ACTIVE)
    {
        $array = self::menuTypeArray();
        return $array[$menuType];
    }
    //type game
    static function typeGameArray()
    {
        return array(GAMEHTML5=>'Game HTML5', GAMEFLASH=>'Game Flash');
    }
    static function getTypeGame($type=GAMEHTML5)
    {
        $array = self::typeGameArray();
        return $array[$type];
    }
    //role admin
    static function roleArray()
    {
        return array(ADMIN=>'Admin'); //, EDITOR=>'Editor'
    }
    static function getRole($roleId=ADMIN)
    {
        $array = self::roleArray();
        return $array[$roleId];
    }
    //screen
    static function screenArray()
    {
        return array(HORIZONTAL=>'Ngang', VERTICAL=>'Dọc');
    }
    static function getScreen($screen=HORIZONTAL)
    {
        $array = self::screenArray();
        return $array[$screen];
    }
    //ad position
    static function adPositionArray()
    {
        return array(
            //all site
            1 => 'Header - PC',
            2 => 'Header - Mobile',
            3 => 'Footer - PC',
            4 => 'Footer - Mobile',
            5 => 'Preroll (QC trên khung chơi game) - PC',
            6 => 'Preroll (QC trên khung chơi game)- Mobile',
            7 => 'Dưới menu phải - PC',
            8 => 'Dưới menu phải - Mobile',
            9 => 'Dưới nội dung game - PC',
            10 => 'Dưới nội dung game - Mobile',
            11 => 'Dưới khung game - PC',
            12 => 'Trên menu phải - PC',
            13 => 'Trên menu phải - Mobile',
            14 => 'Dưới danh sách game trang thể loại - PC',
            15 => 'Dưới danh sách game trang tag - PC',
            16 => 'Dưới danh sách game trang chơi game - PC',
            17 => 'Dưới danh sách game trang tìm kiếm - PC',
            18 => 'QC trôi bên trái - PC',
            19 => 'QC trôi bên phải - PC',
            
        );
    }
    static function getAdPosition($adPosition)
    {
        $array = self::adPositionArray();
        return $array[$adPosition];
    }
    //sort by game type
    static function gameSortByArray()
    {
        return array(
            'start_date' => 'Mặc định (Ngày đăng giảm dần)',
            'view' => 'Lượt chơi giảm dần',

        );
    }
    static function getGameSortBy($sortBy)
    {
        $array = self::gameSortByArray();
        return $array[$sortBy];
    }
}