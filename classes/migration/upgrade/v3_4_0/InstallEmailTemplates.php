<?php

/**
 * @file classes/migration/upgrade/v3_4_0/InstallEmailTemplates.php
 *
 * Copyright (c) 2014-2022 Simon Fraser University
 * Copyright (c) 2000-2022 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class InstallEmailTemplates
* @brief Install new email templates for 3.4
 */

namespace APP\migration\upgrade\v3_4_0;

class InstallEmailTemplates extends \PKP\migration\upgrade\v3_4_0\InstallEmailTemplates
{
    protected function getEmailTemplateKeys(): array
    {
        return [
            'EDITOR_DECISION_SEND_TO_INTERNAL',
            'EDITOR_DECISION_NOTIFY_OTHER_AUTHORS',
            'EDITOR_DECISION_NEW_ROUND',
            'EDITOR_DECISION_REVERT_DECLINE',
            'EDITOR_DECISION_REVERT_INITIAL_DECLINE',
            'EDITOR_DECISION_SKIP_REVIEW',
            'EDITORIAL_REMINDER',
            'EDITOR_DECISION_BACK_FROM_PRODUCTION',
            'EDITOR_DECISION_BACK_FROM_COPYEDITING',
            'EDITOR_DECISION_CANCEL_REVIEW_ROUND',
            'REVIEW_RESEND_REQUEST',
            'DISCUSSION_NOTIFICATION_SUBMISSION',
            'DISCUSSION_NOTIFICATION_REVIEW',
            'DISCUSSION_NOTIFICATION_COPYEDITING',
            'DISCUSSION_NOTIFICATION_PRODUCTION',
            'REVIEW_REQUEST_SUBSEQUENT',
        ];
    }

    protected function getAppVariableNames(): array
    {
        return [
            'contextName' => 'pressName',
            'contextUrl' => 'pressUrl',
            'contextSignature' => 'pressSignature',
        ];
    }
}
