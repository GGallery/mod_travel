<?php
defined('_JEXEC') or die;

class modtravelHelper
{
    private static $_cover;
    private static $_countTb;
    private static $_countTravel;


    public function getUserImage()
    {

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
        } catch (Exception $e) {
            echo $e;
        }

        self::$_cover = $res;
        return self::$_cover;
    }


    public function countTb()
    {
        try {
            $db = JFactory::getDbo();

            $query = $db->getQuery(true)
                ->select('count(*)')
                ->from('#__users as u ')
                ->where('u.tipologia = 2');

            $db->setQuery($query);
            $res = $db->loadResult();
        } catch (Exception $e) {
            echo $e;
        }

        self::$_countTb = $res;
        return self::$_countTb;

    }

    public function countTravel()
    {
        try {
            $db = JFactory::getDbo();

            $query = $db->getQuery(true)
                ->select('count(*)')
                ->from('#__t_travels as t ')
                ->join('inner', '#__users as u on u.id = t.author ')
                ->where('t.pubblicato = 1')
                ->where('u.tipologia = 2')
            ;


            $db->setQuery($query);
            $res = $db->loadResult();
        } catch (Exception $e) {
            echo $e;
        }

        self::$_countTravel = $res;
        return self::$_countTravel;

    }

}
