<?php

declare(strict_types=1);

/*
 * (c) 2019, Wesley O. Nichols
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Wesnick\WorkflowBundle\Validation;

/**
 * Get validation groups for a proposed subject state.  Implement this on interface on workflow subject classes.
 *
 * @author Wesley O. Nichols <spanishwes@gmail.com>
 */
interface ValidationStateProviderInterface
{
    /**
     * Return validation groups for this subject based on a proposed state property.
     *
     * This method should not alter the state of the subject.
     *
     * @param string $state
     * @param string $workflowName
     *
     * @return array
     */
    public function getGroupSequenceForState(string $state, string $workflowName): array;
}
