#
# Regular cron jobs for the multiforcer package
#
0 4	* * *	root	[ -x /usr/bin/multiforcer_maintenance ] && /usr/bin/multiforcer_maintenance
