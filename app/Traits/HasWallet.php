<?php

namespace App\Traits;

trait HasWallet
{
    /**
     * Determine if the user can withdraw the given amount
     * @param  integer $amount (in kobo)
     * @return boolean
     */
    public function isSufficient(int $amount)
    {
        $wallet = $this->wallet;

        return $wallet->balance >= $amount;
    }

    /**
     * Crediting the users wallet
     * @param integer $amount (in kobo)
     * @param bool $bonus
     */
    public function credit($amount, $bonus = false)
    {
        $wallet = $this->wallet;

        if ($bonus) {
            $balance = $wallet->bonus + $amount;
            $wallet->update(['bonus' => $balance]);
        } else {
            $balance = $wallet->balance + $amount;
            $wallet->update(['balance' => $balance]);
        }
    }

    /**
     * Move credits to this account
     * @param integer $amount (in kobo)
     * @param bool $bonus
     */
    public function debit($amount, $bonus = false)
    {
        $wallet = $this->wallet;

        $balance = $wallet->balance;
        $bonusBal = $wallet->bonus;

        // To know if the bonus will be spent
        // Negative value indicates that Main Balance can bear the charges
        // Positive value indicates that Main Balance can't bear all the charges, hence, Bonus will also be used.
        $deficit = $amount - $balance;

        // Check if normal balance can cover the amount
        // If not debit the bonus wallet too.
        if ($bonus && ($deficit > 0)) {
            // For Bonus to be considered, then balance is not enough and should now be 0
            $wallet->update(['balance' => 0]);

            // Deduct the deficit from the bonus
            $bonusBalance = $bonusBal - $deficit;

            $wallet->update(['bonus' => $bonusBalance]);
        } else {
            $balance = $wallet->balance - $amount;

            $wallet->update(['balance' => $balance]);
        }
    }

    public function balance() {
        $wallet = $this->wallet;

        return $wallet->balance;
    }
}
