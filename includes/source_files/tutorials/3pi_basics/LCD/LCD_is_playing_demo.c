#include <pololu/3pi.h>

int main()
{
	char *music_playing_line1 = "music is";
	char *music_playing_line2 = "playing";
	
	delay_ms(1000);
	
	play("AA BB C FF");
	
	if(is_playing())
	{
		print(music_playing_line1);
		lcd_goto_xy(0, 1);
		print(music_playing_line2);
	}

	while(1);
}

