<?php

namespace PatroAPI;

class NepaliCalendar
{
	// Data for nepali date
	private $_bs = [
		[2000, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
		[2001, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2002, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
		[2003, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
		[2004, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
		[2005, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2006, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
		[2007, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
		[2008, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31],
		[2009, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2010, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
		[2011, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
		[2012, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30],
		[2013, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2014, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
		[2015, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
		[2016, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30],
		[2017, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2018, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30],
		[2019, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
		[2020, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30],
		[2021, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2022, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30],
		[2023, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
		[2024, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30],
		[2025, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2026, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
		[2027, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
		[2028, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2029, 31, 31, 32, 31, 32, 30, 30, 29, 30, 29, 30, 30],
		[2030, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
		[2031, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
		[2032, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2033, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
		[2034, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
		[2035, 30, 32, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31],
		[2036, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2037, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
		[2038, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
		[2039, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30],
		[2040, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2041, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
		[2042, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
		[2043, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30],
		[2044, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2045, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30],
		[2046, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
		[2047, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30],
		[2048, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2049, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30],
		[2050, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
		[2051, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30],
		[2052, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2053, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30],
		[2054, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
		[2055, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2056, 31, 31, 32, 31, 32, 30, 30, 29, 30, 29, 30, 30],
		[2057, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
		[2058, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
		[2059, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2060, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
		[2061, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
		[2062, 30, 32, 31, 32, 31, 31, 29, 30, 29, 30, 29, 31],
		[2063, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2064, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
		[2065, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
		[2066, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31],
		[2067, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2068, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30],
		[2069, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
		[2070, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30],
		[2071, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2072, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30],
		[2073, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31],
		[2074, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30],
		[2075, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2076, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30],
		[2077, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31],
		[2078, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30],
		[2079, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30],
		[2080, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30],
		[2081, 31, 31, 32, 32, 31, 30, 30, 30, 29, 30, 30, 30],
		[2082, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30],
		[2083, 31, 31, 32, 31, 31, 30, 30, 30, 29, 30, 30, 30],
		[2084, 31, 31, 32, 31, 31, 30, 30, 30, 29, 30, 30, 30],
		[2085, 31, 32, 31, 32, 30, 31, 30, 30, 29, 30, 30, 30],
		[2086, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30],
		[2087, 31, 31, 32, 31, 31, 31, 30, 30, 29, 30, 30, 30],
		[2088, 30, 31, 32, 32, 30, 31, 30, 30, 29, 30, 30, 30],
		[2089, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30],
		[2090, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30]
	];

	private $_nep_date = ['year' => '', 'month' => '', 'date' => '', 'day' => '', 'nmonth' => '', 'num_day' => ''];

	private $_eng_date = ['year' => '', 'month' => '', 'date' => '', 'day' => '', 'emonth' => '', 'num_day' => ''];

	public $debug_info = "";

	// TODO: change visibility (to private or something else) later as per requirement
	private function _get_day_of_week(int $dayNumber): string
	{
		$daysOfTheWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
		return $daysOfTheWeek[$dayNumber - 1];
	}

	// TODO: change visibility (to private or something else) later as per requirement
	private function _get_english_month(int $monthNumber): string
	{
		$englishMonthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		return $englishMonthNames[$monthNumber - 1];
	}

	// TODO: change visibility (to private or something else) later as per requirement
	private function _get_nepali_month(int $monthNumber): string
	{
		$nepaliMonthNames = ['Baishak', 'Jestha', 'Ashad', 'Shrawn', 'Bhadra', 'Ashwin', 'kartik', 'Mangshir', 'Poush', 'Magh', 'Falgun', 'Chaitra'];
		return $nepaliMonthNames[$monthNumber - 1];
	}

	/**
	 * Check if date range is in english
	 *
	 * @param int $yy
	 * @param int $mm
	 * @param int $dd
	 * @return bool
	 */
	private function _is_in_range_eng($yy, $mm, $dd)
	{
		if ($yy < 1944 || $yy > 2033) {
			return 'Supported only between 1944-2022';
		}

		if ($mm < 1 || $mm > 12) {
			return 'Error! month value can be between 1-12 only';
		}

		if ($dd < 1 || $dd > 31) {
			return 'Error! day value can be between 1-31 only';
		}

		return TRUE;
	}

	/**
	 * Check if date is with in nepali data range
	 *
	 * @param int $yy
	 * @param int $mm
	 * @param int $dd
	 * @return bool
	 */
	private function _is_in_range_nep($yy, $mm, $dd)
	{
		if ($yy < 2000 || $yy > 2089) {
			return 'Supported only between 2000-2089';
		}

		if ($mm < 1 || $mm > 12) {
			return 'Error! month value can be between 1-12 only';
		}

		if ($dd < 1 || $dd > 32) {
			return 'Error! day value can be between 1-31 only';
		}

		return TRUE;
	}

	private function is_leap_year(int $year): bool
	{
		if ($year % 4 !== 0) return false;
		elseif ($year % 100 !== 0) return true;
		elseif ($year % 400 !== 0) return false;
		else return true;
	}

	/**
	 * currently can only calculate the date between AD 1944-2033...
	 *
	 * @param int $yy
	 * @param int $mm
	 * @param int $dd
	 * @return array
	 */
	public function eng_to_nep($yy, $mm, $dd)
	{
		// Check for date range
		$chk = $this->_is_in_range_eng($yy, $mm, $dd);

		if ($chk !== TRUE) {
			die($chk);
		} else {
			// Month data.
			$month  = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

			// Month for leap year
			$lmonth = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

			$def_eyy     = 1944;	// initial english date.
			$def_nyy     = 2000;
			$def_nmm     = 9;
			$def_ndd     = 17 - 1;	// inital nepali date.
			$total_eDays = 0;
			$total_nDays = 0;
			$a           = 0;
			$day         = 7 - 1;
			$m           = 0;
			$y           = 0;
			$i           = 0;
			$j           = 0;
			$numDay      = 0;

			// Count total no. of days in-terms year
			for ($i = 0; $i < ($yy - $def_eyy); $i++) //total days for month calculation...(english)
			{
				if ($this->is_leap_year($def_eyy + $i) === TRUE) {
					for ($j = 0; $j < 12; $j++) {
						$total_eDays += $lmonth[$j];
					}
				} else {
					for ($j = 0; $j < 12; $j++) {
						$total_eDays += $month[$j];
					}
				}
			}

			// Count total no. of days in-terms of month
			for ($i = 0; $i < ($mm - 1); $i++) {
				if ($this->is_leap_year($yy) === TRUE) {
					$total_eDays += $lmonth[$i];
				} else {
					$total_eDays += $month[$i];
				}
			}

			// Count total no. of days in-terms of date
			$total_eDays += $dd;


			$i           = 0;
			$j           = $def_nmm;
			$total_nDays = $def_ndd;
			$m           = $def_nmm;
			$y           = $def_nyy;

			// Count nepali date from array
			while ($total_eDays != 0) {
				$a = $this->_bs[$i][$j];

				$total_nDays++;		//count the days
				$day++;				//count the days interms of 7 days

				if ($total_nDays > $a) {
					$m++;
					$total_nDays = 1;
					$j++;
				}

				if ($day > 7) {
					$day = 1;
				}

				if ($m > 12) {
					$y++;
					$m = 1;
				}

				if ($j > 12) {
					$j = 1;
					$i++;
				}

				$total_eDays--;
			}

			$numDay = $day;

			$this->_nep_date['year']    = $y;
			$this->_nep_date['month']   = $m;
			$this->_nep_date['date']    = $total_nDays;
			$this->_nep_date['day']     = $this->_get_day_of_week($day);
			$this->_nep_date['nmonth']  = $this->_get_nepali_month($m);
			$this->_nep_date['num_day'] = $numDay;
			return $this->_nep_date;
		}
	}


	/**
	 * Currently can only calculate the date between BS 2000-2089
	 *
	 * @param int $yy
	 * @param int $mm
	 * @param int $dd
	 * @return array
	 */
	public function nep_to_eng($yy, $mm, $dd)
	{
		$def_eyy     = 1943;
		$def_emm     = 4;
		$def_edd     = 14 - 1;	// initial english date.
		$def_nyy     = 2000;
		$total_eDays = 0;
		$total_nDays = 0;
		$a           = 0;
		$day         = 4 - 1;
		$m           = 0;
		$y           = 0;
		$i           = 0;
		$k           = 0;
		$numDay      = 0;

		$month  = [0,31,28,31,30,31,30,31,31,30,31,30,31];
		$lmonth = [0,31,29,31,30,31,30,31,31,30,31,30,31];

		// Check for date range
		$chk = $this->_is_in_range_nep($yy, $mm, $dd);

		if ($chk !== TRUE) {
			die($chk);
		} else {
			// Count total days in-terms of year
			for ($i = 0; $i < ($yy - $def_nyy); $i++) {
				for ($j = 1; $j <= 12; $j++) {
					$total_nDays += $this->_bs[$k][$j];
				}
				$k++;
			}

			// Count total days in-terms of month
			for ($j = 1; $j < $mm; $j++) {
				$total_nDays += $this->_bs[$k][$j];
			}

			// Count total days in-terms of dat
			$total_nDays += $dd;

			// Calculation of equivalent english date...
			$total_eDays = $def_edd;
			$m           = $def_emm;
			$y           = $def_eyy;
			while ($total_nDays != 0) {
				if ($this->is_leap_year($y)) {
					$a = $lmonth[$m];
				} else {
					$a = $month[$m];
				}

				$total_eDays++;
				$day++;

				if ($total_eDays > $a) {
					$m++;
					$total_eDays = 1;
					if ($m > 12) {
						$y++;
						$m = 1;
					}
				}

				if ($day > 7) {
					$day = 1;
				}

				$total_nDays--;
			}

			$numDay = $day;

			$this->_eng_date['year']    = $y;
			$this->_eng_date['month']   = $m;
			$this->_eng_date['date']    = $total_eDays;
			$this->_eng_date['day']     = $this->_get_day_of_week($day);
			$this->_eng_date['emonth']  = $this->_get_english_month($m);
			$this->_eng_date['num_day'] = $numDay;

			return $this->_eng_date;
		}
	}
}
