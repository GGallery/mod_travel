<?php
defined('_JEXEC') or die;

class modtravelHelper {
    private static $_cover;

    public function getUserImage(){

        try {
            $db = JFactory::getDbo();
            $user = JFactory::getUser();

            $query = $db->getQuery(true)
                ->select('image')
                ->from('#__t_users as u ')
                ->join('inner', '#__users as u2 on u2.id = u.id')
                ->where('u.id = ' . $user->id);

            $db->setQuery($query);
            $res = $db->loadResult();
        } catch (Exception $e){
            echo $e;
        }

        self::$_cover = $res;
        return self::$_cover;
    }

}
