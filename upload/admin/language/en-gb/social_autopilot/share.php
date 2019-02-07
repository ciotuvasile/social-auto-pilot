<?php
// Heading

// Buttons
$_['button_post']                   = 'Post Now';
$_['button_post_schedule']          = 'Add to Scheduled Posts';
$_['button_update_post_schedule']   = 'Update Scheduled Post';

// Text
$_['text_publish_title']            = 'Publish new post';
$_['text_success_partial']          = 'Message was posted to %s / %s page (success rate: %s%%)!';
$_['text_success_full']             = 'Message was posted successfully!';
$_['text_success_scheduled_post']   = 'Message was scheduled and will be published on %s!';
$_['text_success_task']             = 'Message was sent to OC-Extensions.com and will be published in few seconds (max 3 minutes)!';

$_['text_post_preview']             = 'Preview';
$_['text_post_where']               = 'Where to post?';

$_['text_custom_link']              = 'Custom Link';


// Entry
$_['entry_message']                 = 'Message';
$_['entry_schedule_date']           = 'Publish on';

// Help
$_['help_scheduled_date']           = 'Click \'clock\' button from right side to select datetime';
$_['help_autocomplete']             = 'Type to search (autocomplete)';
$_['help_custom_link']              = 'E.g: http://www.oc-extensions.com/';

// Error
$_['error_permission']              = 'You do not have permission to post using Social AutoPilot!';
$_['error_message_min_length']      = 'Min message length for %s channel is %s characters!';
$_['error_message_max_length']      = 'Max message length for %s channel is %s characters!';
$_['error_link']                    = 'Link required! For general messages add your store link.';
$_['error_image']                   = 'For %s image is required! Only posts like (product, category etc) have image assigned by default.<br />To continue with this post, you can disable %s accounts/pages from area \'Where to post\'!';
$_['error_schedule_time_format']    = 'Invalid \'Publish DateTime\' format! Accepted format is YY-mm-dd HH:mm:ss';
$_['error_schedule_time_remaining'] = 'Set \'Publish DateTime\' at least 20 minutes in the future.';

$_['error_curl']                    = 'CURL error %s(%s)!';
$_['error_destination']             = 'CURL was executed BUT it seems that something went wrong at destination (URL: %s)!';
$_['error_invalid_api_key']         = 'Invalid API KEY! If you bought LICENSE please contact OC-Extensions Team.';
$_['error_expired_api_key']         = 'Your subscription <strong>EXPIRED</strong>! Please renew to continue to use it.';
$_['error_domain']                  = 'Domain is not matching license domain(s) :)!';
$_['error_exceeded_api_limit']      = 'Daily API requests limit reached! Your subscription allow %s API requests / day.';
$_['error_zero_success_rate']       = 'All pages where you tried to post failed. Usually this can happen if permissions are not valid anymore.';
$_['error_no_channels']             = 'Please select at least one page where you want to post!';
