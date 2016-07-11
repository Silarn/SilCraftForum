<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * phpbb_url_matcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class phpbb_url_matcher extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/gallery')) {
            // phpbbgallery_core_index
            if ($pathinfo === '/gallery') {
                return array (  '_controller' => 'phpbbgallery.core.controller.index:base',  '_route' => 'phpbbgallery_core_index',);
            }

            // phpbbgallery_core_index_slash
            if ($pathinfo === '/gallery/') {
                return array (  '_controller' => 'phpbbgallery.core.controller.index:base',  '_route' => 'phpbbgallery_core_index_slash',);
            }

            if (0 === strpos($pathinfo, '/gallery/users')) {
                // phpbbgallery_core_personal
                if ($pathinfo === '/gallery/users') {
                    return array (  '_controller' => 'phpbbgallery.core.controller.index:personal',  'page' => 1,  '_route' => 'phpbbgallery_core_personal',);
                }

                // phpbbgallery_core_personal_page
                if (preg_match('#^/gallery/users/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_personal_page')), array (  '_controller' => 'phpbbgallery.core.controller.index:personal',));
                }

            }

            if (0 === strpos($pathinfo, '/gallery/album')) {
                // phpbbgallery_core_album
                if (preg_match('#^/gallery/album/(?P<album_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_album')), array (  '_controller' => 'phpbbgallery.core.controller.album:base',  'page' => 1,));
                }

                // phpbbgallery_core_album_page
                if (preg_match('#^/gallery/album/(?P<album_id>[^/]++)/page/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_album_page')), array (  '_controller' => 'phpbbgallery.core.controller.album:base',));
                }

                // phpbbgallery_core_album_upload
                if (preg_match('#^/gallery/album/(?P<album_id>[^/]++)/upload$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_album_upload')), array (  '_controller' => 'phpbbgallery.core.controller.upload:main',));
                }

                // phpbbgallery_core_album_watch
                if (preg_match('#^/gallery/album/(?P<album_id>[^/]++)/watch$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_album_watch')), array (  '_controller' => 'phpbbgallery.core.controller.album:watch',));
                }

            }

            if (0 === strpos($pathinfo, '/gallery/image')) {
                // phpbbgallery_core_image
                if (preg_match('#^/gallery/image/(?P<image_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_image')), array (  '_controller' => 'phpbbgallery.core.controller.image:base',  'page' => 1,));
                }

                // phpbbgallery_core_image_page
                if (preg_match('#^/gallery/image/(?P<image_id>[^/]++)/page/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_image_page')), array (  '_controller' => 'phpbbgallery.core.controller.image:base',));
                }

                // phpbbgallery_core_image_delete
                if (preg_match('#^/gallery/image/(?P<image_id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_image_delete')), array (  '_controller' => 'phpbbgallery.core.controller.image:delete',));
                }

                // phpbbgallery_core_image_edit
                if (preg_match('#^/gallery/image/(?P<image_id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_image_edit')), array (  '_controller' => 'phpbbgallery.core.controller.image:edit',));
                }

                // phpbbgallery_core_image_report
                if (preg_match('#^/gallery/image/(?P<image_id>[^/]++)/report$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_image_report')), array (  '_controller' => 'phpbbgallery.core.controller.image:report',));
                }

            }

            if (0 === strpos($pathinfo, '/gallery/comment')) {
                // phpbbgallery_core_comment_add
                if (preg_match('#^/gallery/comment/(?P<image_id>[^/]++)/add/(?P<comment_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_comment_add')), array (  '_controller' => 'phpbbgallery.core.controller.comment:add',));
                }

                // phpbbgallery_core_comment_edit
                if (preg_match('#^/gallery/comment/(?P<image_id>[^/]++)/edit/(?P<comment_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_comment_edit')), array (  '_controller' => 'phpbbgallery.core.controller.comment:edit',));
                }

                // phpbbgallery_core_comment_delete
                if (preg_match('#^/gallery/comment/(?P<image_id>[^/]++)/delete/(?P<comment_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_comment_delete')), array (  '_controller' => 'phpbbgallery.core.controller.comment:delete',));
                }

                // phpbbgallery_core_image_rate
                if (preg_match('#^/gallery/comment/(?P<image_id>[^/]++)/rate$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_image_rate')), array (  '_controller' => 'phpbbgallery.core.controller.comment:rate',));
                }

            }

            if (0 === strpos($pathinfo, '/gallery/image')) {
                // phpbbgallery_core_image_file_source
                if (preg_match('#^/gallery/image/(?P<image_id>[^/]++)/source$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_image_file_source')), array (  '_controller' => 'phpbbgallery.core.controller.file:source',));
                }

                // phpbbgallery_core_image_file_medium
                if (preg_match('#^/gallery/image/(?P<image_id>[^/]++)/medium$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_image_file_medium')), array (  '_controller' => 'phpbbgallery.core.controller.file:medium',));
                }

                // phpbbgallery_core_image_file_mini
                if (preg_match('#^/gallery/image/(?P<image_id>[^/]++)/mini$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_image_file_mini')), array (  '_controller' => 'phpbbgallery.core.controller.file:mini',));
                }

            }

            if (0 === strpos($pathinfo, '/gallery/moderate')) {
                // phpbbgallery_core_moderate
                if ($pathinfo === '/gallery/moderate') {
                    return array (  '_controller' => 'phpbbgallery.core.controller.moderate:base',  'album_id' => 0,  '_route' => 'phpbbgallery_core_moderate',);
                }

                if (0 === strpos($pathinfo, '/gallery/moderate/a')) {
                    if (0 === strpos($pathinfo, '/gallery/moderate/approve')) {
                        // phpbbgallery_core_moderate_queue_approve
                        if ($pathinfo === '/gallery/moderate/approve') {
                            return array (  '_controller' => 'phpbbgallery.core.controller.moderate:queue_approve',  'page' => 1,  'album_id' => 0,  '_route' => 'phpbbgallery_core_moderate_queue_approve',);
                        }

                        // phpbbgallery_core_moderate_queue_approve_page
                        if (preg_match('#^/gallery/moderate/approve/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_moderate_queue_approve_page')), array (  '_controller' => 'phpbbgallery.core.controller.moderate:queue_approve',  'album_id' => 0,));
                        }

                    }

                    if (0 === strpos($pathinfo, '/gallery/moderate/actions')) {
                        // phpbbgallery_core_moderate_action_log
                        if ($pathinfo === '/gallery/moderate/actions') {
                            return array (  '_controller' => 'phpbbgallery.core.controller.moderate:action_log',  'page' => 1,  'album_id' => 0,  '_route' => 'phpbbgallery_core_moderate_action_log',);
                        }

                        // phpbbgallery_core_moderate_action_log_page
                        if (preg_match('#^/gallery/moderate/actions/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_moderate_action_log_page')), array (  '_controller' => 'phpbbgallery.core.controller.moderate:action_log',  'album_id' => 0,));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/gallery/moderate/reports')) {
                    // phpbbgallery_core_moderate_reports
                    if ($pathinfo === '/gallery/moderate/reports') {
                        return array (  '_controller' => 'phpbbgallery.core.controller.moderate:reports',  'page' => 1,  'album_id' => 0,  'status' => 1,  '_route' => 'phpbbgallery_core_moderate_reports',);
                    }

                    // phpbbgallery_core_moderate_reports_page
                    if (preg_match('#^/gallery/moderate/reports/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_moderate_reports_page')), array (  '_controller' => 'phpbbgallery.core.controller.moderate:reports',  'album_id' => 0,  'status' => 1,));
                    }

                    if (0 === strpos($pathinfo, '/gallery/moderate/reports_closed')) {
                        // phpbbgallery_core_moderate_reports_closed
                        if ($pathinfo === '/gallery/moderate/reports_closed') {
                            return array (  '_controller' => 'phpbbgallery.core.controller.moderate:reports',  'page' => 1,  'album_id' => 0,  'status' => 0,  '_route' => 'phpbbgallery_core_moderate_reports_closed',);
                        }

                        // phpbbgallery_core_moderate_reports_closed_page
                        if (preg_match('#^/gallery/moderate/reports_closed/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_moderate_reports_closed_page')), array (  '_controller' => 'phpbbgallery.core.controller.moderate:reports',  'album_id' => 0,  'status' => 0,));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/gallery/moderate/album')) {
                    // phpbbgallery_core_moderate_album
                    if (preg_match('#^/gallery/moderate/album/(?P<album_id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_moderate_album')), array (  '_controller' => 'phpbbgallery.core.controller.moderate:base',));
                    }

                    // phpbbgallery_core_moderate_queue_approve_album
                    if (preg_match('#^/gallery/moderate/album/(?P<album_id>[^/]++)/approve$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_moderate_queue_approve_album')), array (  '_controller' => 'phpbbgallery.core.controller.moderate:queue_approve',  'page' => 1,));
                    }

                    // phpbbgallery_core_moderate_queue_approve_album_page
                    if (preg_match('#^/gallery/moderate/album/(?P<album_id>[^/]++)/approve/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_moderate_queue_approve_album_page')), array (  '_controller' => 'phpbbgallery.core.controller.moderate:queue_approve',));
                    }

                    // phpbbgallery_core_moderate_action_log_album
                    if (preg_match('#^/gallery/moderate/album/(?P<album_id>[^/]++)/actions$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_moderate_action_log_album')), array (  '_controller' => 'phpbbgallery.core.controller.moderate:action_log',  'page' => 1,));
                    }

                    // phpbbgallery_core_moderate_action_log_album_page
                    if (preg_match('#^/gallery/moderate/album/(?P<album_id>[^/]++)/actions/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_moderate_action_log_album_page')), array (  '_controller' => 'phpbbgallery.core.controller.moderate:action_log',));
                    }

                    // phpbbgallery_core_moderate_reports_album
                    if (preg_match('#^/gallery/moderate/album/(?P<album_id>[^/]++)/reports$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_moderate_reports_album')), array (  '_controller' => 'phpbbgallery.core.controller.moderate:reports',  'page' => 1,  'status' => 1,));
                    }

                    // phpbbgallery_core_moderate_reports_album_page
                    if (preg_match('#^/gallery/moderate/album/(?P<album_id>[^/]++)/reports/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_moderate_reports_album_page')), array (  '_controller' => 'phpbbgallery.core.controller.moderate:reports',  'status' => 1,));
                    }

                    // phpbbgallery_core_moderate_reports_closed_album
                    if (preg_match('#^/gallery/moderate/album/(?P<album_id>[^/]++)/reports_closed$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_moderate_reports_closed_album')), array (  '_controller' => 'phpbbgallery.core.controller.moderate:reports',  'page' => 1,  'status' => 0,));
                    }

                    // phpbbgallery_core_moderate_reports_closed_album_page
                    if (preg_match('#^/gallery/moderate/album/(?P<album_id>[^/]++)/reports_closed/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_moderate_reports_closed_album_page')), array (  '_controller' => 'phpbbgallery.core.controller.moderate:reports',  'status' => 0,));
                    }

                    // phpbbgallery_core_moderate_view
                    if (preg_match('#^/gallery/moderate/album/(?P<album_id>[^/]++)/overview$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_moderate_view')), array (  '_controller' => 'phpbbgallery.core.controller.moderate:album_overview',  'page' => 1,));
                    }

                    // phpbbgallery_core_moderate_view_page
                    if (preg_match('#^/gallery/moderate/album/(?P<album_id>[^/]++)/overview/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_moderate_view_page')), array (  '_controller' => 'phpbbgallery.core.controller.moderate:album_overview',));
                    }

                }

                if (0 === strpos($pathinfo, '/gallery/moderate/image')) {
                    // phpbbgallery_core_moderate_image
                    if (preg_match('#^/gallery/moderate/image/(?P<image_id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_moderate_image')), array (  '_controller' => 'phpbbgallery.core.controller.moderate:image',));
                    }

                    // phpbbgallery_core_moderate_image_approve
                    if (preg_match('#^/gallery/moderate/image/(?P<image_id>[^/]++)/approve$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_moderate_image_approve')), array (  '_controller' => 'phpbbgallery.core.controller.moderate:approve',));
                    }

                    // phpbbgallery_core_moderate_image_unapprove
                    if (preg_match('#^/gallery/moderate/image/(?P<image_id>[^/]++)/unapprove$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_moderate_image_unapprove')), array (  '_controller' => 'phpbbgallery.core.controller.moderate:unapprove',));
                    }

                    // phpbbgallery_core_moderate_image_move
                    if (preg_match('#^/gallery/moderate/image/(?P<image_id>[^/]++)/move$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_moderate_image_move')), array (  '_controller' => 'phpbbgallery.core.controller.moderate:move',));
                    }

                    // phpbbgallery_core_moderate_image_lock
                    if (preg_match('#^/gallery/moderate/image/(?P<image_id>[^/]++)/lock$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_moderate_image_lock')), array (  '_controller' => 'phpbbgallery.core.controller.moderate:lock',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/gallery/search')) {
                // phpbbgallery_core_search
                if ($pathinfo === '/gallery/search') {
                    return array (  '_controller' => 'phpbbgallery.core.controller.search:base',  '_route' => 'phpbbgallery_core_search',);
                }

                if (0 === strpos($pathinfo, '/gallery/search/r')) {
                    // phpbbgallery_core_search_random
                    if ($pathinfo === '/gallery/search/random') {
                        return array (  '_controller' => 'phpbbgallery.core.controller.search:random',  '_route' => 'phpbbgallery_core_search_random',);
                    }

                    if (0 === strpos($pathinfo, '/gallery/search/recent')) {
                        // phpbbgallery_core_search_recent
                        if ($pathinfo === '/gallery/search/recent') {
                            return array (  '_controller' => 'phpbbgallery.core.controller.search:recent',  'page' => 1,  '_route' => 'phpbbgallery_core_search_recent',);
                        }

                        // phpbbgallery_core_search_recent_page
                        if (preg_match('#^/gallery/search/recent/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_search_recent_page')), array (  '_controller' => 'phpbbgallery.core.controller.search:recent',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/gallery/search/commented')) {
                    // phpbbgallery_core_search_commented
                    if ($pathinfo === '/gallery/search/commented') {
                        return array (  '_controller' => 'phpbbgallery.core.controller.search:recent_comments',  'page' => 1,  '_route' => 'phpbbgallery_core_search_commented',);
                    }

                    // phpbbgallery_core_search_commented_page
                    if (preg_match('#^/gallery/search/commented/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_search_commented_page')), array (  '_controller' => 'phpbbgallery.core.controller.search:recent_comments',));
                    }

                }

                if (0 === strpos($pathinfo, '/gallery/search/self')) {
                    // phpbbgallery_core_search_egosearch
                    if ($pathinfo === '/gallery/search/self') {
                        return array (  '_controller' => 'phpbbgallery.core.controller.search:ego_search',  'page' => 1,  '_route' => 'phpbbgallery_core_search_egosearch',);
                    }

                    // phpbbgallery_core_search_egosearch_page
                    if (preg_match('#^/gallery/search/self/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_search_egosearch_page')), array (  '_controller' => 'phpbbgallery.core.controller.search:ego_search',));
                    }

                }

                if (0 === strpos($pathinfo, '/gallery/search/toprated')) {
                    // phpbbgallery_core_search_toprated
                    if ($pathinfo === '/gallery/search/toprated') {
                        return array (  '_controller' => 'phpbbgallery.core.controller.search:toprated',  'page' => 1,  '_route' => 'phpbbgallery_core_search_toprated',);
                    }

                    // phpbbgallery_core_search_toprated_page
                    if (preg_match('#^/gallery/search/toprated/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbbgallery_core_search_toprated_page')), array (  '_controller' => 'phpbbgallery.core.controller.search:toprated',));
                    }

                }

            }

        }

        // vse_abbc3_bbcode_wizard
        if (0 === strpos($pathinfo, '/wizard/bbcode') && preg_match('#^/wizard/bbcode/(?P<mode>\\w+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vse_abbc3_bbcode_wizard')), array (  '_controller' => 'vse.abbc3.wizard:bbcode_wizard',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
