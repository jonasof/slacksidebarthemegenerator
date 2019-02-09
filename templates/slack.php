<!-- Source code from https://github.com/paracycle/slackthemes/blob/master/source/layouts/layout.erb -->

<link rel="shortcut icon" href="/favicon-32.png" sizes="16x16 32x32 48x48" type="image/png">

<link href="/stylesheets/rollup-client_core.css" rel="stylesheet" type="text/css">
<link href="/stylesheets/rollup-client_primary.css" rel="stylesheet" type="text/css">
<link href="/stylesheets/rollup-client_general.css" rel="stylesheet" type="text/css">
<link href="/stylesheets/rollup-client_secondary.css" rel="stylesheet" type="text/css">
<link href="/stylesheets/libs/lato-1.css" rel="stylesheet" type="text/css">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<div class="slackpreview">
  <style type="text/css" id="sidebar_theme_css">
    /* Column Background */
    #col_channels_bg,
    #col_channels {
        background: <?php echo $slackBar->getRgb('column_bg'); ?>;
    }
    #monkey_scroll_wrapper_for_channels_scroller .monkey_scroll_handle_inner {
        border-color: <?php echo $slackBar->getRgb('column_bg'); ?>;
    }
    /* Menu Background */
    #team_menu,
    #user_menu {
        background: <?php echo $slackBar->getRgb('column_bg'); ?>;
        color: <?php echo $slackBar->getRgb('text_color'); ?>;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);
    }
    #team_menu {
        border-bottom-color: <?php echo $slackBar->getRgb('column_bg'); ?>;
    }
    #user_menu {
        border-top-color: <?php echo $slackBar->getRgb('column_bg'); ?>;
    }
    /* Active Item */
    #col_channels ul li.channel.active a.channel_name,
    #col_channels ul li.group.active a.group_name,
    #col_channels ul li.member.active a.im_name {
        background: <?php echo $slackBar->getRgb('active_item'); ?>;
        opacity: 1;
        color: <?php echo $slackBar->getRgb('menu_bg_hover'); ?> !important;
    }
    #col_channels.channels_list_holder ul li.channel.active .unread_highlight, #col_channels.channels_list_holder ul li.member.active .unread_highlight, #col_channels.channels_list_holder ul li.group.active .unread_highlight {
        color: <?php echo $slackBar->getRgb('active_item'); ?>;
    }
    /* Hovered Item */
    .channels_list_holder ul li a:hover,
    #monkey_scroll_wrapper_for_channels_scroller .monkey_scroll_bar {
        background: <?php echo $slackBar->getRgb('hover_item'); ?>;
    }
    /* Text Color */
    .channels_list_holder ul li a,
    .channels_list_holder h2,
    .list_more,
    #team_menu i,
    #user_menu i,
    .channels_list_holder ul li.channel.active a.channel_name .prefix,
    .channels_list_holder ul li.group.active a.group_name .prefix,
    #current_user_name,
    .channels_list_holder ul li.unread .prefix,
    .channels_list_holder ul li.member .im_close,
    .channels_list_holder ul li.group .group_close {
        color: <?php echo $slackBar->getRgb('text_color'); ?> !important;
        opacity: 0.6;
    }
    .channels_list_holder ul li.channel.active a.channel_name .prefix,
    .channels_list_holder ul li.group.active a.group_name .prefix {
        color: <?php echo $slackBar->getRgb('active_item_text'); ?> !important;
    }
    .list_more:hover {
        color: <?php echo $slackBar->getRgb('text_color'); ?> !important;
        border-bottom-color: <?php echo $slackBar->getRgb('text_color'); ?>;
    }
    .channels_list_holder ul li.unread a,
    #current_user_name,
    .channels_list_holder ul li.member .im_close,
    .channels_list_holder ul li.group .group_close {
        opacity: 1;
    }
    #monkey_scroll_wrapper_for_channels_scroller .monkey_scroll_handle_inner {
        background: <?php echo $slackBar->getRgb('text_color'); ?>;
        opacity: 0.7;
    }
    /* Presence */
    #im-list .presence.active i.presence_icon,
    #starred-list .presence.active i.presence_icon,
    .slackbot_icon {
        color: <?php echo $slackBar->getRgb('active_presence'); ?>;
        opacity: 1;
    }
    #im-list li.member.active .presence.active i.presence_icon,
    #starred-list li.member.active .presence.active i.presence_icon,
    #im-list li.member.active .slackbot_icon,
    #starred-list li.member.active .slackbot_icon {
        color: <?php echo $slackBar->getRgb('active_item_text'); ?> !important;
    }
    /* Override for Hoth Theme presence dot on selected item. Fix Bug #7154 */
    .sidebar_theme_hoth_theme #im-list li.member.active .presence.active i.presence_icon,
    .sidebar_theme_hoth_theme #starred-list li.member.active .presence.active i.presence_icon,
    .sidebar_theme_hoth_theme #im-list li.member.active .slackbot_icon,
    .sidebar_theme_hoth_theme #starred-list li.member.active .slackbot_icon {
        color: <?php echo $slackBar->getRgb('active_presence'); ?> !important;
    }
    #im-list li.member.active .presence.away i.presence_icon,
    #starred-list li.member.active .presence.away i.presence_icon {
        color: <?php echo $slackBar->getRgb('active_item_text'); ?> !important;
        opacity: 0.3;
    }
    #im-list .presence.away,
    #starred-list .presence.away {
        color: <?php echo $slackBar->getRgb('text_color'); ?>;
        opacity: 0.3;
    }
    /* Badge + Mentions bar */
    .channels_list_holder .unread_highlight,
    #channel_scroll_up.unseen_have_mentions,
    #channel_scroll_down.unseen_have_mentions,
    #omnibox .omnibox_item .unread_highlight_cnt {
        background: <?php echo $slackBar->getRgb('mention_badge'); ?>;
    }
    /* No text shadows */
    #col_channels a,
    #team_menu,
    #user_menu,
    #loading_team_menu_bg,
    #loading_user_menu_bg {
        text-shadow: none !important;
    }
  </style>
  <div id="client-ui" class="container-fluid sidebar_theme_hoth_theme">
    <div id="client_body">
      <div id="col_messages">
        <div class="row-fluid">
          <div id="col_channels" class="show_presence channels_list_holder no_just_unreads">
            <div id="monkey_scroll_wrapper_for_channels_scroller" class="monkey_scroll_wrapper ">
              <div class="monkey_scroll_hider" style="width: 203px;">
                <div id="channels_scroller" class="monkey_scroller" style="height: 813px; visibility: visible; width: 220px;">
                  <div id="channels" class="section_holder">
                    <h2 id="channels_header" class="hoverable overflow_ellipsis">Channels</h2>
                    <ul id="channel-list">
                      <li class="channel active ">
                        <a class="channel_name">
                          <span class="unread_highlight">8</span>
                          <span class="overflow_ellipsis">
                            <span class="prefix">#</span> general
                          </span>
                        </a>
                      </li>

                      <li class="channel unread">
                        <a class="channel_name">
                          <span class="unread_highlight">3</span>
                          <span class="overflow_ellipsis">
                            <span class="prefix">#</span> random
                          </span>
                        </a>
                      </li>
                      <a class="channel-list-create list_more">Create a channel...</a>
                    </ul>
                    <div class="clear_both"></div>
                  </div>

                  <div id="direct_messages" class="section_holder">
                    <h2 id="direct_messages_header" class="hoverable overflow_ellipsis">Direct Messages</h2>
                    <ul id="im-list">
                      <li class="member_USLACKBOT member  cursor_pointer">
                        <a class="im_name nuc color_USLACKBOT" data-member-id="USLACKBOT">
                          <i class="fa fa-times-circle im_close"></i>
                          <span class="unread_highlight_USLACKBOT unread_highlight hidden">0</span>
                          <span class="overflow_ellipsis">
                            <i class="fa fa-heart slackbot_icon"></i>
                            slackbot
                          </span>
                        </a>
                      </li>

                      <li class="member away  cursor_pointer">
                        <a class="im_name nuc">
                          <i class="fa fa-times-circle im_close"></i>
                          <span class="unread_highlight hidden">0</span>
                          <span class="overflow_ellipsis">
                            <span class="presence away" title="away"><i class="fa fa-circle presence_icon"></i></span>
                            jack
                          </span>
                        </a>
                      </li>

                      <li class="member cursor_pointer unread">
                        <a class="im_name nuc">
                          <i class="fa fa-times-circle im_close"></i>
                          <span class="unread_highlight">10</span>
                          <span class="overflow_ellipsis">
                            <span class="presence active" title="active"><i class="fa fa-circle presence_icon"></i></span>
                            jane
                          </span>
                        </a>
                      </li>

                      <li class="member cursor_pointer">
                        <a class="im_name nuc">
                          <i class="fa fa-times-circle im_close"></i>
                          <span class="unread_highlight hidden">0</span>
                          <span class="overflow_ellipsis">
                            <span class="presence active" title="active"><i class="fa fa-circle presence_icon"></i></span>
                            hanna
                          </span>
                        </a>
                      </li>
                    </ul>
                    <div class="clear_both"></div>
                    <a id="im_list_more" class="list_more hidden"></a>
                  </div>

                  <div id="groups" class="section_holder">
                    <h2 id="groups_header" class="hoverable overflow_ellipsis">Private Groups</h2>
                    <ul id="group-list"></ul>
                    <div class="clear_both"></div>
                    <a id="group_list_more" class="list_more">New private group...</a>
                  </div>

                </div>
              </div>
            </div>

            <a id="user_menu" style="bottom: 0px;" href="">
              <div id="current_user_avatar">
                <span class="member_image thumb_48" style="background-image: url('/images/profile.jpg')"></span>
              </div>
              <span id="current_user_name" class="overflow_ellipsis">some user</span>
              <img id="connection_icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABmFBMVEUAAAD////////////////////////////////////2+/LR5bKw1Hmfy1KUxz2VyD2izVKz1nnS5rP////A3JuOw0qKwkCNxD+QxT6Sxj6Txz6SxUnC3Jv1+fGXx2GDvkCGwECIwUCLwj+PxD6PxT+JwUCFwECZyGD2+vGSxWF9vEGAvkGDv0CMwz+Wx2GPw2F4ukJ7u0J+vUGBvkGHwUB8u0KSxGG31pp0uEN3uUJ5u0KFv0CCv0B6u0K415p5uU1yt0N/vUF1uEN8u0zG3bFttURwtkR5ukLH3rGWxnlqtERutUR2uUOZx3l6uVZos0VvtkRxt0Nzt0N8ulVisUVlskVns0VzuENmskVfsEVps0VztlZer0VhsEVjsUVstER1t1aOwXhcrkZdr0VgsEaQwnm/2a9YrUZbrka/2rDz+PFhr09XrEZksE6pzplUq0ZVrEZarUaqzpl0tWJRq0dWrEZ1tmJztWJOqUdSq0dxtGJMqEdNqUdQqkdytWKmzJhXrFBKqEdZrU+716+GvXhjr1dIp0hkr1dYtVOVAAAAFHRSTlMAV8/v/wCH+x/n////////////9kvBHZAAAAG7SURBVHgBvdOxjtNAEIDhGe/MZO3sxVaiIJkiSNdQUPJOeQlqXoCCIg/EU9BQHRKg5CT7ErzrHTa+aBOqaxC/tdLK+2kbj+H/hoWhlCmQr0HeyYxyM8mvkWHKoAfBS6cBWEeYugAzf4QGp1SV8DvU/ZjBdN7iud6hdnOTdl+TuALyrUPEwfdu3nc1ipr9AwdIFZPysJylRDfa6cZL2rfgMd9QjO8R0Y+/u7sa4LHZz4wN/MXEyw1hbK1VZdV7PZ1OyufzktsxXADCW5EkXq06Paan02Uoo3kHmAEzJ8HBN6v5qlkqaxTmCdAzQK8Noi6rXwCrJyutepUMAARnXS++3cvm2xvftR0PzAyQAXtwdNChifvFHppBdR003IDCIg6JDOse4DX8WIdo1TwfpaUgqWC9c4eqqg5HF20QZdAMmDlasdHWkrKR03J0A4iIXRTrpba29laiY8YMyOyMKYkXroyROZZuwVTyztAFJPmZKBGq+FxFVBr5BHr7ubd3GICfAM+88qDHHYe/BmbbIAaGKU/Fz10emDxyHxBhgJTg+DGP3O3QbltMBkd92F2H9sWxB772wo9z2z8FfwDHWbdKLDfq1AAAAABJRU5ErkJggg==" class="" style="opacity: 1;">
              <span id="connection_status">online</span>
              <i class="fa fa-chevron-up"></i>
            </a>

          </div>

          <div id="messages_container">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>