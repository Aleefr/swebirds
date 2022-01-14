from playsound import playsound
import random
import time


def play_sound(audio_file):
    playsound('birds '+str(audio_file)+'.wav')


if __name__ == '__main__':

    while True:
        random_number = random.randint(0, 60)
        time.sleep(random_number)
        random_number = random.randint(1, 7)
        play_sound(random_number)
